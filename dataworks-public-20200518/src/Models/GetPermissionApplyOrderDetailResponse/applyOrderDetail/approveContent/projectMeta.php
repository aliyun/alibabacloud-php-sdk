<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponse\applyOrderDetail\approveContent;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponse\applyOrderDetail\approveContent\projectMeta\objectMetaList;
use AlibabaCloud\Tea\Model;

class projectMeta extends Model
{
    /**
     * @var int
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $maxComputeProjectName;

    /**
     * @var objectMetaList[]
     */
    public $objectMetaList;
    protected $_name = [
        'workspaceId'           => 'WorkspaceId',
        'maxComputeProjectName' => 'MaxComputeProjectName',
        'objectMetaList'        => 'ObjectMetaList',
    ];

    public function validate()
    {
        Model::validateRequired('workspaceId', $this->workspaceId, true);
        Model::validateRequired('maxComputeProjectName', $this->maxComputeProjectName, true);
        Model::validateRequired('objectMetaList', $this->objectMetaList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }
        if (null !== $this->maxComputeProjectName) {
            $res['MaxComputeProjectName'] = $this->maxComputeProjectName;
        }
        if (null !== $this->objectMetaList) {
            $res['ObjectMetaList'] = [];
            if (null !== $this->objectMetaList && \is_array($this->objectMetaList)) {
                $n = 0;
                foreach ($this->objectMetaList as $item) {
                    $res['ObjectMetaList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectMeta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }
        if (isset($map['MaxComputeProjectName'])) {
            $model->maxComputeProjectName = $map['MaxComputeProjectName'];
        }
        if (isset($map['ObjectMetaList'])) {
            if (!empty($map['ObjectMetaList'])) {
                $model->objectMetaList = [];
                $n                     = 0;
                foreach ($map['ObjectMetaList'] as $item) {
                    $model->objectMetaList[$n++] = null !== $item ? objectMetaList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
