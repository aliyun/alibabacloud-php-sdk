<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @example 1578469042851
     *
     * @var int
     */
    public $creationTime;

    /**
     * @example 435986
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
     * @example 4
     *
     * @var int
     */
    public $maxConcurrentConversation;

    /**
     * @example xxxx
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
    protected $_name = [
        'creationTime'              => 'CreationTime',
        'creatorId'                 => 'CreatorId',
        'creatorName'               => 'CreatorName',
        'instanceDescription'       => 'InstanceDescription',
        'instanceId'                => 'InstanceId',
        'instanceName'              => 'InstanceName',
        'maxConcurrentConversation' => 'MaxConcurrentConversation',
        'ownerName'                 => 'OwnerName',
        'resourceGroupId'           => 'ResourceGroupId',
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
        if (null !== $this->maxConcurrentConversation) {
            $res['MaxConcurrentConversation'] = $this->maxConcurrentConversation;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
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
        if (isset($map['MaxConcurrentConversation'])) {
            $model->maxConcurrentConversation = $map['MaxConcurrentConversation'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
