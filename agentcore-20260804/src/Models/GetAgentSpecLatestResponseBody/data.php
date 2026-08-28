<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentSpecLatestResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DataResourceValue;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentSpecLatestResponseBody\data\mcpServers;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentSpecLatestResponseBody\data\skills;

class data extends Model
{
    /**
     * @var string
     */
    public $bizTags;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $downloadCount;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var mcpServers[]
     */
    public $mcpServers;

    /**
     * @var string
     */
    public $name;

    /**
     * @var DataResourceValue[]
     */
    public $resource;

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
        'content' => 'content',
        'description' => 'description',
        'downloadCount' => 'downloadCount',
        'enable' => 'enable',
        'mcpServers' => 'mcpServers',
        'name' => 'name',
        'resource' => 'resource',
        'scope' => 'scope',
        'skills' => 'skills',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
        if (\is_array($this->mcpServers)) {
            Model::validateArray($this->mcpServers);
        }
        if (\is_array($this->resource)) {
            Model::validateArray($this->resource);
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

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->downloadCount) {
            $res['downloadCount'] = $this->downloadCount;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
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

        if (null !== $this->resource) {
            if (\is_array($this->resource)) {
                $res['resource'] = [];
                foreach ($this->resource as $key1 => $value1) {
                    $res['resource'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
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

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['downloadCount'])) {
            $model->downloadCount = $map['downloadCount'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
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

        if (isset($map['resource'])) {
            if (!empty($map['resource'])) {
                $model->resource = [];
                foreach ($map['resource'] as $key1 => $value1) {
                    $model->resource[$key1] = DataResourceValue::fromMap($value1);
                }
            }
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
