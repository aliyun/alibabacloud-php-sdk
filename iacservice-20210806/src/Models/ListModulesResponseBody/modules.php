<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListModulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListModulesResponseBody\modules\groupInfo;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListModulesResponseBody\modules\tags;

class modules extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $deletionProtection;

    /**
     * @var string
     */
    public $description;

    /**
     * @var groupInfo
     */
    public $groupInfo;

    /**
     * @var string
     */
    public $latestVersion;

    /**
     * @var mixed[]
     */
    public $meta;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $source;

    /**
     * @var mixed[]
     */
    public $sourceConfig;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'createTime' => 'createTime',
        'deletionProtection' => 'deletionProtection',
        'description' => 'description',
        'groupInfo' => 'groupInfo',
        'latestVersion' => 'latestVersion',
        'meta' => 'meta',
        'moduleId' => 'moduleId',
        'name' => 'name',
        'source' => 'source',
        'sourceConfig' => 'sourceConfig',
        'status' => 'status',
        'tags' => 'tags',
    ];

    public function validate()
    {
        if (null !== $this->groupInfo) {
            $this->groupInfo->validate();
        }
        if (\is_array($this->meta)) {
            Model::validateArray($this->meta);
        }
        if (\is_array($this->sourceConfig)) {
            Model::validateArray($this->sourceConfig);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->deletionProtection) {
            $res['deletionProtection'] = $this->deletionProtection;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->groupInfo) {
            $res['groupInfo'] = null !== $this->groupInfo ? $this->groupInfo->toArray($noStream) : $this->groupInfo;
        }

        if (null !== $this->latestVersion) {
            $res['latestVersion'] = $this->latestVersion;
        }

        if (null !== $this->meta) {
            if (\is_array($this->meta)) {
                $res['meta'] = [];
                foreach ($this->meta as $key1 => $value1) {
                    $res['meta'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->moduleId) {
            $res['moduleId'] = $this->moduleId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->sourceConfig) {
            if (\is_array($this->sourceConfig)) {
                $res['sourceConfig'] = [];
                foreach ($this->sourceConfig as $key1 => $value1) {
                    $res['sourceConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['deletionProtection'])) {
            $model->deletionProtection = $map['deletionProtection'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['groupInfo'])) {
            $model->groupInfo = groupInfo::fromMap($map['groupInfo']);
        }

        if (isset($map['latestVersion'])) {
            $model->latestVersion = $map['latestVersion'];
        }

        if (isset($map['meta'])) {
            if (!empty($map['meta'])) {
                $model->meta = [];
                foreach ($map['meta'] as $key1 => $value1) {
                    $model->meta[$key1] = $value1;
                }
            }
        }

        if (isset($map['moduleId'])) {
            $model->moduleId = $map['moduleId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['sourceConfig'])) {
            if (!empty($map['sourceConfig'])) {
                $model->sourceConfig = [];
                foreach ($map['sourceConfig'] as $key1 => $value1) {
                    $model->sourceConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
