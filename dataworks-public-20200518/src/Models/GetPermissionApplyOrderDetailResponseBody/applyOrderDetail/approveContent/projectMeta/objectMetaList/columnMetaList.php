<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody\applyOrderDetail\approveContent\projectMeta\objectMetaList;

use AlibabaCloud\Dara\Model;

class columnMetaList extends Model
{
    /**
     * @var string[]
     */
    public $columnActions;

    /**
     * @var string
     */
    public $columnComment;

    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $securityLevel;
    protected $_name = [
        'columnActions' => 'ColumnActions',
        'columnComment' => 'ColumnComment',
        'columnName' => 'ColumnName',
        'securityLevel' => 'SecurityLevel',
    ];

    public function validate()
    {
        if (\is_array($this->columnActions)) {
            Model::validateArray($this->columnActions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnActions) {
            if (\is_array($this->columnActions)) {
                $res['ColumnActions'] = [];
                $n1 = 0;
                foreach ($this->columnActions as $item1) {
                    $res['ColumnActions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->columnComment) {
            $res['ColumnComment'] = $this->columnComment;
        }

        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }

        if (null !== $this->securityLevel) {
            $res['SecurityLevel'] = $this->securityLevel;
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
        if (isset($map['ColumnActions'])) {
            if (!empty($map['ColumnActions'])) {
                $model->columnActions = [];
                $n1 = 0;
                foreach ($map['ColumnActions'] as $item1) {
                    $model->columnActions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ColumnComment'])) {
            $model->columnComment = $map['ColumnComment'];
        }

        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }

        if (isset($map['SecurityLevel'])) {
            $model->securityLevel = $map['SecurityLevel'];
        }

        return $model;
    }
}
