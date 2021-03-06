<?php
declare(strict_types=1);

namespace TYPO3\CMS\Core\Database\Schema\Parser\AST;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Syntax node to represent identifiers used in various parts of a
 * SQL statements like table, field or index names.
 */
class Identifier
{
    /**
     * @var string
     */
    public $schemaObjectName;

    /**
     * Identifier constructor.
     *
     * @param string $schemaObjectName
     */
    public function __construct(string $schemaObjectName = null)
    {
        $this->schemaObjectName = (string)$schemaObjectName;
    }
}
