<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @description Specifies whether to remove all tags that are added to the specified SMC resource. This parameter is valid only if you do not set `TagKey.N`. Valid values:
     *
     *   true: removes all tags that are added to the specified SMC resource. If no tags are added to the specified SMC resource, no operation is performed.
     *   false: does not remove tags that are added to the specified SMC resource.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $all;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The IDs of N SMC resources. SMC resources include migration sources and jobs. Valid values of N: 1 to 50.
     *
     * @example s-bw526m1vi6x20c6g****
     *
     * @var string[]
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description The type of the SMC resource. Valid values:
     *
     *   sourceserver: migration source.
     *   replicationjob: migration job.
     *
     * @example sourceserver
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The key of tag N that is added to the SMC resource. Tag keys are case-sensitive. Valid values of N: 1 to 20.
     *
     * @example TestKey
     *
     * @var string[]
     */
    public $tagKey;
    protected $_name = [
        'all'                  => 'All',
        'ownerId'              => 'OwnerId',
        'resourceId'           => 'ResourceId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceType'         => 'ResourceType',
        'tagKey'               => 'TagKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->all) {
            $res['All'] = $this->all;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UntagResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['All'])) {
            $model->all = $map['All'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = $map['ResourceId'];
            }
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TagKey'])) {
            if (!empty($map['TagKey'])) {
                $model->tagKey = $map['TagKey'];
            }
        }

        return $model;
    }
}
