<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentSpecVersionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DataResourceValue;

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
     * @var string
     */
    public $name;

    /**
     * @var DataResourceValue[]
     */
    public $resource;
    protected $_name = [
        'bizTags' => 'bizTags',
        'content' => 'content',
        'description' => 'description',
        'name' => 'name',
        'resource' => 'resource',
    ];

    public function validate()
    {
        if (\is_array($this->resource)) {
            Model::validateArray($this->resource);
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

        return $model;
    }
}
