<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponseBody\applyOrders\applyOrder\approveContent;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponseBody\applyOrders\applyOrder\approveContent\projectMeta\objectMetaList;

class projectMeta extends Model
{
    /**
     * @var objectMetaList[]
     */
    public $objectMetaList;
    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'objectMetaList' => 'ObjectMetaList',
        'workspaceName'  => 'WorkspaceName',
    ];

    public function validate()
    {
        if (\is_array($this->objectMetaList)) {
            Model::validateArray($this->objectMetaList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->objectMetaList) {
            if (\is_array($this->objectMetaList)) {
                $res['ObjectMetaList'] = [];
                $n1                    = 0;
                foreach ($this->objectMetaList as $item1) {
                    $res['ObjectMetaList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
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
        if (isset($map['ObjectMetaList'])) {
            if (!empty($map['ObjectMetaList'])) {
                $model->objectMetaList = [];
                $n1                    = 0;
                foreach ($map['ObjectMetaList'] as $item1) {
                    $model->objectMetaList[$n1++] = objectMetaList::fromMap($item1);
                }
            }
        }

        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        return $model;
    }
}
