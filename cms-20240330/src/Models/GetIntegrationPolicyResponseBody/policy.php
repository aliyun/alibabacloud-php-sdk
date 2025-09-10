<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetIntegrationPolicyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetIntegrationPolicyResponseBody\policy\bindResource;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetIntegrationPolicyResponseBody\policy\entityGroup;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetIntegrationPolicyResponseBody\policy\managedInfo;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetIntegrationPolicyResponseBody\policy\tags;

class policy extends Model
{
    /**
     * @var bindResource
     */
    public $bindResource;

    /**
     * @var entityGroup
     */
    public $entityGroup;

    /**
     * @var managedInfo
     */
    public $managedInfo;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $policyType;

    /**
     * @var string
     */
    public $regionId;

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

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'bindResource' => 'bindResource',
        'entityGroup' => 'entityGroup',
        'managedInfo' => 'managedInfo',
        'policyId' => 'policyId',
        'policyName' => 'policyName',
        'policyType' => 'policyType',
        'regionId' => 'regionId',
        'resourceGroupId' => 'resourceGroupId',
        'tags' => 'tags',
        'userId' => 'userId',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (null !== $this->bindResource) {
            $this->bindResource->validate();
        }
        if (null !== $this->entityGroup) {
            $this->entityGroup->validate();
        }
        if (null !== $this->managedInfo) {
            $this->managedInfo->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindResource) {
            $res['bindResource'] = null !== $this->bindResource ? $this->bindResource->toArray($noStream) : $this->bindResource;
        }

        if (null !== $this->entityGroup) {
            $res['entityGroup'] = null !== $this->entityGroup ? $this->entityGroup->toArray($noStream) : $this->entityGroup;
        }

        if (null !== $this->managedInfo) {
            $res['managedInfo'] = null !== $this->managedInfo ? $this->managedInfo->toArray($noStream) : $this->managedInfo;
        }

        if (null !== $this->policyId) {
            $res['policyId'] = $this->policyId;
        }

        if (null !== $this->policyName) {
            $res['policyName'] = $this->policyName;
        }

        if (null !== $this->policyType) {
            $res['policyType'] = $this->policyType;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['bindResource'])) {
            $model->bindResource = bindResource::fromMap($map['bindResource']);
        }

        if (isset($map['entityGroup'])) {
            $model->entityGroup = entityGroup::fromMap($map['entityGroup']);
        }

        if (isset($map['managedInfo'])) {
            $model->managedInfo = managedInfo::fromMap($map['managedInfo']);
        }

        if (isset($map['policyId'])) {
            $model->policyId = $map['policyId'];
        }

        if (isset($map['policyName'])) {
            $model->policyName = $map['policyName'];
        }

        if (isset($map['policyType'])) {
            $model->policyType = $map['policyType'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
