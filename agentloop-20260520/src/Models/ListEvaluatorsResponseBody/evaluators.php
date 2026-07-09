<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListEvaluatorsResponseBody;

use AlibabaCloud\Dara\Model;

class evaluators extends Model
{
    /**
     * @var string[]
     */
    public $annotations;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $latestVersion;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[]
     */
    public $properties;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $updatedAt;
    protected $_name = [
        'annotations' => 'annotations',
        'createdAt' => 'createdAt',
        'description' => 'description',
        'displayName' => 'displayName',
        'latestVersion' => 'latestVersion',
        'metricName' => 'metricName',
        'name' => 'name',
        'properties' => 'properties',
        'type' => 'type',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        if (\is_array($this->annotations)) {
            Model::validateArray($this->annotations);
        }
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotations) {
            if (\is_array($this->annotations)) {
                $res['annotations'] = [];
                $n1 = 0;
                foreach ($this->annotations as $item1) {
                    $res['annotations'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->latestVersion) {
            $res['latestVersion'] = $this->latestVersion;
        }

        if (null !== $this->metricName) {
            $res['metricName'] = $this->metricName;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['properties'] = [];
                foreach ($this->properties as $key1 => $value1) {
                    $res['properties'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['annotations'])) {
            if (!empty($map['annotations'])) {
                $model->annotations = [];
                $n1 = 0;
                foreach ($map['annotations'] as $item1) {
                    $model->annotations[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['latestVersion'])) {
            $model->latestVersion = $map['latestVersion'];
        }

        if (isset($map['metricName'])) {
            $model->metricName = $map['metricName'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['properties'])) {
            if (!empty($map['properties'])) {
                $model->properties = [];
                foreach ($map['properties'] as $key1 => $value1) {
                    $model->properties[$key1] = $value1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
