<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListAgentSpecsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListAgentSpecsResponseBody\data\pageItems\mcpServers;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListAgentSpecsResponseBody\data\pageItems\skills;

class pageItems extends Model
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
     * @var mcpServers[]
     */
    public $mcpServers;

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
    public $reviewingVersion;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var skills[]
     */
    public $skills;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'bizTags' => 'bizTags',
        'description' => 'description',
        'downloadCount' => 'downloadCount',
        'editingVersion' => 'editingVersion',
        'enable' => 'enable',
        'from' => 'from',
        'labels' => 'labels',
        'mcpServers' => 'mcpServers',
        'name' => 'name',
        'onlineCnt' => 'onlineCnt',
        'reviewingVersion' => 'reviewingVersion',
        'scope' => 'scope',
        'skills' => 'skills',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->mcpServers)) {
            Model::validateArray($this->mcpServers);
        }
        if (\is_array($this->skills)) {
            Model::validateArray($this->skills);
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

        if (null !== $this->mcpServers) {
            if (\is_array($this->mcpServers)) {
                $res['mcpServers'] = [];
                $n1 = 0;
                foreach ($this->mcpServers as $item1) {
                    $res['mcpServers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->onlineCnt) {
            $res['onlineCnt'] = $this->onlineCnt;
        }

        if (null !== $this->reviewingVersion) {
            $res['reviewingVersion'] = $this->reviewingVersion;
        }

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        if (null !== $this->skills) {
            if (\is_array($this->skills)) {
                $res['skills'] = [];
                $n1 = 0;
                foreach ($this->skills as $item1) {
                    $res['skills'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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

        if (isset($map['mcpServers'])) {
            if (!empty($map['mcpServers'])) {
                $model->mcpServers = [];
                $n1 = 0;
                foreach ($map['mcpServers'] as $item1) {
                    $model->mcpServers[$n1] = mcpServers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['onlineCnt'])) {
            $model->onlineCnt = $map['onlineCnt'];
        }

        if (isset($map['reviewingVersion'])) {
            $model->reviewingVersion = $map['reviewingVersion'];
        }

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        if (isset($map['skills'])) {
            if (!empty($map['skills'])) {
                $model->skills = [];
                $n1 = 0;
                foreach ($map['skills'] as $item1) {
                    $model->skills[$n1] = skills::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
