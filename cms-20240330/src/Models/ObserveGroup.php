<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ObserveGroup\tags;

class ObserveGroup extends Model
{
    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var ObserveGroupDiscoverRule[]
     */
    public $discoverRules;

    /**
     * @var int[]
     */
    public $entityCounts;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @var bool
     */
    public $favorited;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var int
     */
    public $health;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var bool
     */
    public $ogEntityInfoEnabled;

    /**
     * @var ObserveGroupPromInstance[]
     */
    public $ogEntityInfoPromInstances;

    /**
     * @var string
     */
    public $originGroupId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $sourceOrigin;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'aliUid' => 'aliUid',
        'createTime' => 'createTime',
        'description' => 'description',
        'discoverRules' => 'discoverRules',
        'entityCounts' => 'entityCounts',
        'extraInfo' => 'extraInfo',
        'favorited' => 'favorited',
        'groupId' => 'groupId',
        'groupName' => 'groupName',
        'groupType' => 'groupType',
        'health' => 'health',
        'modifyTime' => 'modifyTime',
        'ogEntityInfoEnabled' => 'ogEntityInfoEnabled',
        'ogEntityInfoPromInstances' => 'ogEntityInfoPromInstances',
        'originGroupId' => 'originGroupId',
        'regionId' => 'regionId',
        'resourceGroupId' => 'resourceGroupId',
        'sourceOrigin' => 'sourceOrigin',
        'tags' => 'tags',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->discoverRules)) {
            Model::validateArray($this->discoverRules);
        }
        if (\is_array($this->entityCounts)) {
            Model::validateArray($this->entityCounts);
        }
        if (\is_array($this->ogEntityInfoPromInstances)) {
            Model::validateArray($this->ogEntityInfoPromInstances);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['aliUid'] = $this->aliUid;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->discoverRules) {
            if (\is_array($this->discoverRules)) {
                $res['discoverRules'] = [];
                $n1 = 0;
                foreach ($this->discoverRules as $item1) {
                    $res['discoverRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->entityCounts) {
            if (\is_array($this->entityCounts)) {
                $res['entityCounts'] = [];
                foreach ($this->entityCounts as $key1 => $value1) {
                    $res['entityCounts'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->extraInfo) {
            $res['extraInfo'] = $this->extraInfo;
        }

        if (null !== $this->favorited) {
            $res['favorited'] = $this->favorited;
        }

        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }

        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
        }

        if (null !== $this->groupType) {
            $res['groupType'] = $this->groupType;
        }

        if (null !== $this->health) {
            $res['health'] = $this->health;
        }

        if (null !== $this->modifyTime) {
            $res['modifyTime'] = $this->modifyTime;
        }

        if (null !== $this->ogEntityInfoEnabled) {
            $res['ogEntityInfoEnabled'] = $this->ogEntityInfoEnabled;
        }

        if (null !== $this->ogEntityInfoPromInstances) {
            if (\is_array($this->ogEntityInfoPromInstances)) {
                $res['ogEntityInfoPromInstances'] = [];
                $n1 = 0;
                foreach ($this->ogEntityInfoPromInstances as $item1) {
                    $res['ogEntityInfoPromInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->originGroupId) {
            $res['originGroupId'] = $this->originGroupId;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->sourceOrigin) {
            $res['sourceOrigin'] = $this->sourceOrigin;
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

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['aliUid'])) {
            $model->aliUid = $map['aliUid'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['discoverRules'])) {
            if (!empty($map['discoverRules'])) {
                $model->discoverRules = [];
                $n1 = 0;
                foreach ($map['discoverRules'] as $item1) {
                    $model->discoverRules[$n1] = ObserveGroupDiscoverRule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['entityCounts'])) {
            if (!empty($map['entityCounts'])) {
                $model->entityCounts = [];
                foreach ($map['entityCounts'] as $key1 => $value1) {
                    $model->entityCounts[$key1] = $value1;
                }
            }
        }

        if (isset($map['extraInfo'])) {
            $model->extraInfo = $map['extraInfo'];
        }

        if (isset($map['favorited'])) {
            $model->favorited = $map['favorited'];
        }

        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }

        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
        }

        if (isset($map['groupType'])) {
            $model->groupType = $map['groupType'];
        }

        if (isset($map['health'])) {
            $model->health = $map['health'];
        }

        if (isset($map['modifyTime'])) {
            $model->modifyTime = $map['modifyTime'];
        }

        if (isset($map['ogEntityInfoEnabled'])) {
            $model->ogEntityInfoEnabled = $map['ogEntityInfoEnabled'];
        }

        if (isset($map['ogEntityInfoPromInstances'])) {
            if (!empty($map['ogEntityInfoPromInstances'])) {
                $model->ogEntityInfoPromInstances = [];
                $n1 = 0;
                foreach ($map['ogEntityInfoPromInstances'] as $item1) {
                    $model->ogEntityInfoPromInstances[$n1] = ObserveGroupPromInstance::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['originGroupId'])) {
            $model->originGroupId = $map['originGroupId'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['sourceOrigin'])) {
            $model->sourceOrigin = $map['sourceOrigin'];
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

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
