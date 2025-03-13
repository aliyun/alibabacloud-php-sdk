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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateProcCorrectOrderRequest;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateProcCorrectOrderRequest\param\dbItemList;
use AlibabaCloud\Tea\Model;

class param extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $classify;

    /**
     * @description This parameter is required.
     *
     * @var dbItemList[]
     */
    public $dbItemList;

    /**
     * @var string
     */
    public $execMode;

    /**
     * @description This parameter is required.
     *
     * @example DELIMITER ///
     * CREATE PROCEDURE GetAllProducts()
     * BEGIN
     * SELECT *  FROM base_user;
     * END ///
     *
     * @var string
     */
    public $execSQL;

    /**
     * @example test_rollback.sql
     *
     * @var string
     */
    public $rollbackAttachmentName;

    /**
     * @example empty
     *
     * @var string
     */
    public $rollbackSQL;

    /**
     * @example TEXT
     *
     * @var string
     */
    public $rollbackSqlType;
    protected $_name = [
        'classify' => 'Classify',
        'dbItemList' => 'DbItemList',
        'execMode' => 'ExecMode',
        'execSQL' => 'ExecSQL',
        'rollbackAttachmentName' => 'RollbackAttachmentName',
        'rollbackSQL' => 'RollbackSQL',
        'rollbackSqlType' => 'RollbackSqlType',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }
        if (null !== $this->dbItemList) {
            $res['DbItemList'] = [];
            if (null !== $this->dbItemList && \is_array($this->dbItemList)) {
                $n = 0;
                foreach ($this->dbItemList as $item) {
                    $res['DbItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->execMode) {
            $res['ExecMode'] = $this->execMode;
        }
        if (null !== $this->execSQL) {
            $res['ExecSQL'] = $this->execSQL;
        }
        if (null !== $this->rollbackAttachmentName) {
            $res['RollbackAttachmentName'] = $this->rollbackAttachmentName;
        }
        if (null !== $this->rollbackSQL) {
            $res['RollbackSQL'] = $this->rollbackSQL;
        }
        if (null !== $this->rollbackSqlType) {
            $res['RollbackSqlType'] = $this->rollbackSqlType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return param
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }
        if (isset($map['DbItemList'])) {
            if (!empty($map['DbItemList'])) {
                $model->dbItemList = [];
                $n = 0;
                foreach ($map['DbItemList'] as $item) {
                    $model->dbItemList[$n++] = null !== $item ? dbItemList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ExecMode'])) {
            $model->execMode = $map['ExecMode'];
        }
        if (isset($map['ExecSQL'])) {
            $model->execSQL = $map['ExecSQL'];
        }
        if (isset($map['RollbackAttachmentName'])) {
            $model->rollbackAttachmentName = $map['RollbackAttachmentName'];
        }
        if (isset($map['RollbackSQL'])) {
            $model->rollbackSQL = $map['RollbackSQL'];
        }
        if (isset($map['RollbackSqlType'])) {
            $model->rollbackSqlType = $map['RollbackSqlType'];
        }

        return $model;
    }
}
