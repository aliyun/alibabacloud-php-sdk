<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListSentinelBlockFallbackDefinitionsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var mixed[]
     */
    public $fallbackBehavior;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $resourceClassification;

    /**
     * @var mixed[]
     */
    public $targetMap;
    protected $_name = [
        'appName' => 'AppName',
        'fallbackBehavior' => 'FallbackBehavior',
        'id' => 'Id',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'resourceClassification' => 'ResourceClassification',
        'targetMap' => 'TargetMap',
    ];

    public function validate()
    {
        if (\is_array($this->fallbackBehavior)) {
            Model::validateArray($this->fallbackBehavior);
        }
        if (\is_array($this->targetMap)) {
            Model::validateArray($this->targetMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->fallbackBehavior) {
            if (\is_array($this->fallbackBehavior)) {
                $res['FallbackBehavior'] = [];
                foreach ($this->fallbackBehavior as $key1 => $value1) {
                    $res['FallbackBehavior'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->resourceClassification) {
            $res['ResourceClassification'] = $this->resourceClassification;
        }

        if (null !== $this->targetMap) {
            if (\is_array($this->targetMap)) {
                $res['TargetMap'] = [];
                foreach ($this->targetMap as $key1 => $value1) {
                    $res['TargetMap'][$key1] = $value1;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['FallbackBehavior'])) {
            if (!empty($map['FallbackBehavior'])) {
                $model->fallbackBehavior = [];
                foreach ($map['FallbackBehavior'] as $key1 => $value1) {
                    $model->fallbackBehavior[$key1] = $value1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['ResourceClassification'])) {
            $model->resourceClassification = $map['ResourceClassification'];
        }

        if (isset($map['TargetMap'])) {
            if (!empty($map['TargetMap'])) {
                $model->targetMap = [];
                foreach ($map['TargetMap'] as $key1 => $value1) {
                    $model->targetMap[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
