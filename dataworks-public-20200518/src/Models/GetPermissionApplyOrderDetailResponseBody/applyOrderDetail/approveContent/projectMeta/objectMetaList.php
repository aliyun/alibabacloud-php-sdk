<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody\applyOrderDetail\approveContent\projectMeta;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody\applyOrderDetail\approveContent\projectMeta\objectMetaList\columnMetaList;

class objectMetaList extends Model
{
    /**
     * @var columnMetaList[]
     */
    public $columnMetaList;
    /**
     * @var string
     */
    public $objectName;
    protected $_name = [
        'columnMetaList' => 'ColumnMetaList',
        'objectName'     => 'ObjectName',
    ];

    public function validate()
    {
        if (\is_array($this->columnMetaList)) {
            Model::validateArray($this->columnMetaList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnMetaList) {
            if (\is_array($this->columnMetaList)) {
                $res['ColumnMetaList'] = [];
                $n1                    = 0;
                foreach ($this->columnMetaList as $item1) {
                    $res['ColumnMetaList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->objectName) {
            $res['ObjectName'] = $this->objectName;
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
        if (isset($map['ColumnMetaList'])) {
            if (!empty($map['ColumnMetaList'])) {
                $model->columnMetaList = [];
                $n1                    = 0;
                foreach ($map['ColumnMetaList'] as $item1) {
                    $model->columnMetaList[$n1++] = columnMetaList::fromMap($item1);
                }
            }
        }

        if (isset($map['ObjectName'])) {
            $model->objectName = $map['ObjectName'];
        }

        return $model;
    }
}
