<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody\applyOrderDetail\approveContent;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody\applyOrderDetail\approveContent\projectMeta\objectMetaList;

class projectMeta extends Model
{
    /**
     * @var string
     */
    public $maxComputeProjectName;
    /**
     * @var objectMetaList[]
     */
    public $objectMetaList;
    /**
     * @var int
     */
    public $workspaceId;
    protected $_name = [
        'maxComputeProjectName' => 'MaxComputeProjectName',
        'objectMetaList'        => 'ObjectMetaList',
        'workspaceId'           => 'WorkspaceId',
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
        if (null !== $this->maxComputeProjectName) {
            $res['MaxComputeProjectName'] = $this->maxComputeProjectName;
        }

        if (null !== $this->objectMetaList) {
            if (\is_array($this->objectMetaList)) {
                $res['ObjectMetaList'] = [];
                $n1                    = 0;
                foreach ($this->objectMetaList as $item1) {
                    $res['ObjectMetaList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['MaxComputeProjectName'])) {
            $model->maxComputeProjectName = $map['MaxComputeProjectName'];
        }

        if (isset($map['ObjectMetaList'])) {
            if (!empty($map['ObjectMetaList'])) {
                $model->objectMetaList = [];
                $n1                    = 0;
                foreach ($map['ObjectMetaList'] as $item1) {
                    $model->objectMetaList[$n1++] = objectMetaList::fromMap($item1);
                }
            }
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
