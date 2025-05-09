<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateProcCorrectOrderRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateProcCorrectOrderRequest\param\dbItemList;

class param extends Model
{
    /**
     * @var string
     */
    public $classify;

    /**
     * @var dbItemList[]
     */
    public $dbItemList;

    /**
     * @var string
     */
    public $execMode;

    /**
     * @var string
     */
    public $execSQL;

    /**
     * @var string
     */
    public $rollbackAttachmentName;

    /**
     * @var string
     */
    public $rollbackSQL;

    /**
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

    public function validate()
    {
        if (\is_array($this->dbItemList)) {
            Model::validateArray($this->dbItemList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }

        if (null !== $this->dbItemList) {
            if (\is_array($this->dbItemList)) {
                $res['DbItemList'] = [];
                $n1 = 0;
                foreach ($this->dbItemList as $item1) {
                    $res['DbItemList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }

        if (isset($map['DbItemList'])) {
            if (!empty($map['DbItemList'])) {
                $model->dbItemList = [];
                $n1 = 0;
                foreach ($map['DbItemList'] as $item1) {
                    $model->dbItemList[$n1++] = dbItemList::fromMap($item1);
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
