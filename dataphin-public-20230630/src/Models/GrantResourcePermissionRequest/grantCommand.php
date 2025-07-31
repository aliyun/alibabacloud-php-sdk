<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GrantResourcePermissionRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GrantResourcePermissionRequest\grantCommand\resourceList;
use AlibabaCloud\Tea\Model;

class grantCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1717343597000
     *
     * @var string
     */
    public $effectiveEnd;

    /**
     * @description This parameter is required.
     *
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
     * @var string[]
     */
    public $userIdList;
    protected $_name = [
        'effectiveEnd' => 'EffectiveEnd',
        'operateList' => 'OperateList',
        'reason' => 'Reason',
        'resourceList' => 'ResourceList',
        'resourceType' => 'ResourceType',
        'userIdList' => 'UserIdList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->effectiveEnd) {
            $res['EffectiveEnd'] = $this->effectiveEnd;
        }
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
        if (null !== $this->userIdList) {
            $res['UserIdList'] = $this->userIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return grantCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EffectiveEnd'])) {
            $model->effectiveEnd = $map['EffectiveEnd'];
        }
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
        if (isset($map['UserIdList'])) {
            if (!empty($map['UserIdList'])) {
                $model->userIdList = $map['UserIdList'];
            }
        }

        return $model;
    }
}
