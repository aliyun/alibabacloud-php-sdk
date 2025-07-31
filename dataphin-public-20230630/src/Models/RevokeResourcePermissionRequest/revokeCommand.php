<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\RevokeResourcePermissionRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\RevokeResourcePermissionRequest\revokeCommand\resourceList;
use AlibabaCloud\Tea\Model;

class revokeCommand extends Model
{
    /**
     * @var string[]
     */
    public $operateList;

    /**
     * @example xx
     *
     * @var string
     */
    public $reason;

    /**
     * @description This parameter is required.
     *
     * @var resourceList[]
     */
    public $resourceList;

    /**
     * @description This parameter is required.
     *
     * @example PHYSICAL_TABLE
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description This parameter is required.
     *
     * @example 13131
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'operateList' => 'OperateList',
        'reason' => 'Reason',
        'resourceList' => 'ResourceList',
        'resourceType' => 'ResourceType',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->operateList) {
            $res['OperateList'] = $this->operateList;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->resourceList) {
            $res['ResourceList'] = [];
            if (null !== $this->resourceList && \is_array($this->resourceList)) {
                $n = 0;
                foreach ($this->resourceList as $item) {
                    $res['ResourceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return revokeCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperateList'])) {
            if (!empty($map['OperateList'])) {
                $model->operateList = $map['OperateList'];
            }
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['ResourceList'])) {
            if (!empty($map['ResourceList'])) {
                $model->resourceList = [];
                $n = 0;
                foreach ($map['ResourceList'] as $item) {
                    $model->resourceList[$n++] = null !== $item ? resourceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
