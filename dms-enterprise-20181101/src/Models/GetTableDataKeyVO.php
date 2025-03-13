<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetTableDataKeyVO extends Model
{
    /**
     * @var string
     */
    public $colName;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var int
     */
    public $mekId;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var string
     */
    public $tblName;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'colName' => 'ColName',
        'dbName' => 'DbName',
        'mekId' => 'MekId',
        'schemaName' => 'SchemaName',
        'tblName' => 'TblName',
        'userName' => 'UserName',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->colName) {
            $res['ColName'] = $this->colName;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->mekId) {
            $res['MekId'] = $this->mekId;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->tblName) {
            $res['TblName'] = $this->tblName;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTableDataKeyVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColName'])) {
            $model->colName = $map['ColName'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['MekId'])) {
            $model->mekId = $map['MekId'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['TblName'])) {
            $model->tblName = $map['TblName'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
