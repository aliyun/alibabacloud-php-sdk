<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetSkillDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetSkillDetailResponseBody\data\versions;

class data extends Model
{
    /**
     * @var string
     */
    public $bizTags;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $downloadCount;

    /**
     * @var string
     */
    public $editingVersion;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $from;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $onlineCnt;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $reviewingVersion;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var versions[]
     */
    public $versions;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var bool
     */
    public $writeable;
    protected $_name = [
        'bizTags' => 'bizTags',
        'description' => 'description',
        'downloadCount' => 'downloadCount',
        'editingVersion' => 'editingVersion',
        'enable' => 'enable',
        'from' => 'from',
        'labels' => 'labels',
        'name' => 'name',
        'onlineCnt' => 'onlineCnt',
        'owner' => 'owner',
        'reviewingVersion' => 'reviewingVersion',
        'scope' => 'scope',
        'updateTime' => 'updateTime',
        'versions' => 'versions',
        'workspaceId' => 'workspaceId',
        'writeable' => 'writeable',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->versions)) {
            Model::validateArray($this->versions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizTags) {
            $res['bizTags'] = $this->bizTags;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->downloadCount) {
            $res['downloadCount'] = $this->downloadCount;
        }

        if (null !== $this->editingVersion) {
            $res['editingVersion'] = $this->editingVersion;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->from) {
            $res['from'] = $this->from;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['labels'] = [];
                foreach ($this->labels as $key1 => $value1) {
                    $res['labels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->onlineCnt) {
            $res['onlineCnt'] = $this->onlineCnt;
        }

        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }

        if (null !== $this->reviewingVersion) {
            $res['reviewingVersion'] = $this->reviewingVersion;
        }

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->versions) {
            if (\is_array($this->versions)) {
                $res['versions'] = [];
                $n1 = 0;
                foreach ($this->versions as $item1) {
                    $res['versions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        if (null !== $this->writeable) {
            $res['writeable'] = $this->writeable;
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
        if (isset($map['bizTags'])) {
            $model->bizTags = $map['bizTags'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['downloadCount'])) {
            $model->downloadCount = $map['downloadCount'];
        }

        if (isset($map['editingVersion'])) {
            $model->editingVersion = $map['editingVersion'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['from'])) {
            $model->from = $map['from'];
        }

        if (isset($map['labels'])) {
            if (!empty($map['labels'])) {
                $model->labels = [];
                foreach ($map['labels'] as $key1 => $value1) {
                    $model->labels[$key1] = $value1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['onlineCnt'])) {
            $model->onlineCnt = $map['onlineCnt'];
        }

        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }

        if (isset($map['reviewingVersion'])) {
            $model->reviewingVersion = $map['reviewingVersion'];
        }

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['versions'])) {
            if (!empty($map['versions'])) {
                $model->versions = [];
                $n1 = 0;
                foreach ($map['versions'] as $item1) {
                    $model->versions[$n1] = versions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        if (isset($map['writeable'])) {
            $model->writeable = $map['writeable'];
        }

        return $model;
    }
}
