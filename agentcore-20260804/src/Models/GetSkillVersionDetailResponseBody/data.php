<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetSkillVersionDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DataResourceValue;

class data extends Model
{
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

    /**
     * @var string
     */
    public $skillMd;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'description' => 'description',
        'name' => 'name',
        'resource' => 'resource',
        'skillMd' => 'skillMd',
        'workspaceId' => 'workspaceId',
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

        if (null !== $this->skillMd) {
            $res['skillMd'] = $this->skillMd;
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

        if (isset($map['skillMd'])) {
            $model->skillMd = $map['skillMd'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
