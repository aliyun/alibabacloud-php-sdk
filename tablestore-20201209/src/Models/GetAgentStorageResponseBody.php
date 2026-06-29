<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\GetAgentStorageResponseBody\tags;

class GetAgentStorageResponseBody extends Model
{
    /**
     * @var string
     */
    public $agentStorageDescription;

    /**
     * @var string
     */
    public $agentStorageName;

    /**
     * @var string
     */
    public $agentStorageSpecification;

    /**
     * @var string
     */
    public $agentStorageStatus;

    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string[]
     */
    public $networkSourceACL;

    /**
     * @var string[]
     */
    public $networkTypeACL;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var int
     */
    public $policyVersion;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'agentStorageDescription' => 'AgentStorageDescription',
        'agentStorageName' => 'AgentStorageName',
        'agentStorageSpecification' => 'AgentStorageSpecification',
        'agentStorageStatus' => 'AgentStorageStatus',
        'aliasName' => 'AliasName',
        'createTime' => 'CreateTime',
        'networkSourceACL' => 'NetworkSourceACL',
        'networkTypeACL' => 'NetworkTypeACL',
        'policy' => 'Policy',
        'policyVersion' => 'PolicyVersion',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->networkSourceACL)) {
            Model::validateArray($this->networkSourceACL);
        }
        if (\is_array($this->networkTypeACL)) {
            Model::validateArray($this->networkTypeACL);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentStorageDescription) {
            $res['AgentStorageDescription'] = $this->agentStorageDescription;
        }

        if (null !== $this->agentStorageName) {
            $res['AgentStorageName'] = $this->agentStorageName;
        }

        if (null !== $this->agentStorageSpecification) {
            $res['AgentStorageSpecification'] = $this->agentStorageSpecification;
        }

        if (null !== $this->agentStorageStatus) {
            $res['AgentStorageStatus'] = $this->agentStorageStatus;
        }

        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->networkSourceACL) {
            if (\is_array($this->networkSourceACL)) {
                $res['NetworkSourceACL'] = [];
                $n1 = 0;
                foreach ($this->networkSourceACL as $item1) {
                    $res['NetworkSourceACL'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->networkTypeACL) {
            if (\is_array($this->networkTypeACL)) {
                $res['NetworkTypeACL'] = [];
                $n1 = 0;
                foreach ($this->networkTypeACL as $item1) {
                    $res['NetworkTypeACL'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        if (null !== $this->policyVersion) {
            $res['PolicyVersion'] = $this->policyVersion;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AgentStorageDescription'])) {
            $model->agentStorageDescription = $map['AgentStorageDescription'];
        }

        if (isset($map['AgentStorageName'])) {
            $model->agentStorageName = $map['AgentStorageName'];
        }

        if (isset($map['AgentStorageSpecification'])) {
            $model->agentStorageSpecification = $map['AgentStorageSpecification'];
        }

        if (isset($map['AgentStorageStatus'])) {
            $model->agentStorageStatus = $map['AgentStorageStatus'];
        }

        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['NetworkSourceACL'])) {
            if (!empty($map['NetworkSourceACL'])) {
                $model->networkSourceACL = [];
                $n1 = 0;
                foreach ($map['NetworkSourceACL'] as $item1) {
                    $model->networkSourceACL[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NetworkTypeACL'])) {
            if (!empty($map['NetworkTypeACL'])) {
                $model->networkTypeACL = [];
                $n1 = 0;
                foreach ($map['NetworkTypeACL'] as $item1) {
                    $model->networkTypeACL[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        if (isset($map['PolicyVersion'])) {
            $model->policyVersion = $map['PolicyVersion'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
