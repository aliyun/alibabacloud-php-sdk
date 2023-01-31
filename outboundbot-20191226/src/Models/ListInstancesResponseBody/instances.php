<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListInstancesResponseBody;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListInstancesResponseBody\instances\resourceTags;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @example 1578469042851
     *
     * @var int
     */
    public $creationTime;

    /**
     * @example 34234
     *
     * @var int
     */
    public $creatorId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $instanceDescription;

    /**
     * @example 90515b5-6115-4ccf-83e2-52d5bfaf2ddf
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var bool
     */
    public $isPreset;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxConcurrentConversation;

    /**
     * @example xxx
     *
     * @var string
     */
    public $ownerName;

    /**
     * @example 90515b5-6115-4ccf-83e2-52d5bfaf2ddf
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example []
     *
     * @var resourceTags[]
     */
    public $resourceTags;
    protected $_name = [
        'creationTime'              => 'CreationTime',
        'creatorId'                 => 'CreatorId',
        'creatorName'               => 'CreatorName',
        'instanceDescription'       => 'InstanceDescription',
        'instanceId'                => 'InstanceId',
        'instanceName'              => 'InstanceName',
        'isPreset'                  => 'IsPreset',
        'maxConcurrentConversation' => 'MaxConcurrentConversation',
        'ownerName'                 => 'OwnerName',
        'resourceGroupId'           => 'ResourceGroupId',
        'resourceTags'              => 'ResourceTags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->isPreset) {
            $res['IsPreset'] = $this->isPreset;
        }
        if (null !== $this->maxConcurrentConversation) {
            $res['MaxConcurrentConversation'] = $this->maxConcurrentConversation;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceTags) {
            $res['ResourceTags'] = [];
            if (null !== $this->resourceTags && \is_array($this->resourceTags)) {
                $n = 0;
                foreach ($this->resourceTags as $item) {
                    $res['ResourceTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['IsPreset'])) {
            $model->isPreset = $map['IsPreset'];
        }
        if (isset($map['MaxConcurrentConversation'])) {
            $model->maxConcurrentConversation = $map['MaxConcurrentConversation'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceTags'])) {
            if (!empty($map['ResourceTags'])) {
                $model->resourceTags = [];
                $n                   = 0;
                foreach ($map['ResourceTags'] as $item) {
                    $model->resourceTags[$n++] = null !== $item ? resourceTags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
