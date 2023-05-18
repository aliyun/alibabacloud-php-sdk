<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListSharedTargetsResponseBody;

use AlibabaCloud\Tea\Model;

class sharedTargets extends Model
{
    /**
     * @description The time when the principal was associated with the resource share.
     *
     * @example 2020-12-07T09:16:59.905Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Indicates whether the principal is outside the resource directory. Valid values:
     *
     *   true: The principal is outside the resource directory.
     *   false: The principal is in the resource directory.
     *
     * @example false
     *
     * @var bool
     */
    public $external;

    /**
     * @description The ID of the resource share.
     *
     * @example rs-6GRmdD3X****
     *
     * @var string
     */
    public $resourceShareId;

    /**
     * @description The ID of the principal or resource owner.
     *
     *   If the value of `ResourceOwner` is `Self`, the value of this parameter is the ID of a principal.
     *   If the value of `ResourceOwner` is `OtherAccounts`, the value of this parameter is the ID of a resource owner.
     *
     * @example 114240524784****
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The time when the association of the principal was updated.
     *
     * @example 2020-12-07T09:16:59.905Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'external'        => 'External',
        'resourceShareId' => 'ResourceShareId',
        'targetId'        => 'TargetId',
        'updateTime'      => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->external) {
            $res['External'] = $this->external;
        }
        if (null !== $this->resourceShareId) {
            $res['ResourceShareId'] = $this->resourceShareId;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sharedTargets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['External'])) {
            $model->external = $map['External'];
        }
        if (isset($map['ResourceShareId'])) {
            $model->resourceShareId = $map['ResourceShareId'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
