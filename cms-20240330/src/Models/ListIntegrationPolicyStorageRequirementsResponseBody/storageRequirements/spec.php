<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyStorageRequirementsResponseBody\storageRequirements;

use AlibabaCloud\Dara\Model;

class spec extends Model
{
    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $instance;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $shareScope;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string[]
     */
    public $systemTags;

    /**
     * @var string[]
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
        'entityId' => 'entityId',
        'instance' => 'instance',
        'instanceName' => 'instanceName',
        'project' => 'project',
        'region' => 'region',
        'shareScope' => 'shareScope',
        'storageType' => 'storageType',
        'systemTags' => 'systemTags',
        'tags' => 'tags',
        'userId' => 'userId',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (\is_array($this->systemTags)) {
            Model::validateArray($this->systemTags);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityId) {
            $res['entityId'] = $this->entityId;
        }

        if (null !== $this->instance) {
            $res['instance'] = $this->instance;
        }

        if (null !== $this->instanceName) {
            $res['instanceName'] = $this->instanceName;
        }

        if (null !== $this->project) {
            $res['project'] = $this->project;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->shareScope) {
            $res['shareScope'] = $this->shareScope;
        }

        if (null !== $this->storageType) {
            $res['storageType'] = $this->storageType;
        }

        if (null !== $this->systemTags) {
            if (\is_array($this->systemTags)) {
                $res['systemTags'] = [];
                foreach ($this->systemTags as $key1 => $value1) {
                    $res['systemTags'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['tags'][$key1] = $value1;
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
        if (isset($map['entityId'])) {
            $model->entityId = $map['entityId'];
        }

        if (isset($map['instance'])) {
            $model->instance = $map['instance'];
        }

        if (isset($map['instanceName'])) {
            $model->instanceName = $map['instanceName'];
        }

        if (isset($map['project'])) {
            $model->project = $map['project'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['shareScope'])) {
            $model->shareScope = $map['shareScope'];
        }

        if (isset($map['storageType'])) {
            $model->storageType = $map['storageType'];
        }

        if (isset($map['systemTags'])) {
            if (!empty($map['systemTags'])) {
                $model->systemTags = [];
                foreach ($map['systemTags'] as $key1 => $value1) {
                    $model->systemTags[$key1] = $value1;
                }
            }
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                foreach ($map['tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
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
