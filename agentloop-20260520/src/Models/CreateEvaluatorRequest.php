<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class CreateEvaluatorRequest extends Model
{
    /**
     * @var string[]
     */
    public $annotations;

    /**
     * @var mixed[]
     */
    public $config;

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
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $versionDescription;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'annotations' => 'annotations',
        'config' => 'config',
        'description' => 'description',
        'displayName' => 'displayName',
        'metricName' => 'metricName',
        'name' => 'name',
        'properties' => 'properties',
        'type' => 'type',
        'version' => 'version',
        'versionDescription' => 'versionDescription',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
        if (\is_array($this->annotations)) {
            Model::validateArray($this->annotations);
        }
        if (\is_array($this->config)) {
            Model::validateArray($this->config);
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

        if (null !== $this->config) {
            if (\is_array($this->config)) {
                $res['config'] = [];
                foreach ($this->config as $key1 => $value1) {
                    $res['config'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
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

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->versionDescription) {
            $res['versionDescription'] = $this->versionDescription;
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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

        if (isset($map['config'])) {
            if (!empty($map['config'])) {
                $model->config = [];
                foreach ($map['config'] as $key1 => $value1) {
                    $model->config[$key1] = $value1;
                }
            }
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
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

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['versionDescription'])) {
            $model->versionDescription = $map['versionDescription'];
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
