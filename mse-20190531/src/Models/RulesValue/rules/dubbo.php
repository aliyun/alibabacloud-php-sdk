<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\RulesValue\rules;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\RulesValue\rules\dubbo\argumentItems;

class dubbo extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $triggerPolicy;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $methodName;

    /**
     * @var string[]
     */
    public $paramTypes;

    /**
     * @var string
     */
    public $condition;

    /**
     * @var argumentItems[]
     */
    public $argumentItems;
    protected $_name = [
        'appId' => 'appId',
        'tags' => 'tags',
        'triggerPolicy' => 'triggerPolicy',
        'serviceName' => 'serviceName',
        'group' => 'group',
        'version' => 'version',
        'methodName' => 'methodName',
        'paramTypes' => 'paramTypes',
        'condition' => 'condition',
        'argumentItems' => 'argumentItems',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->paramTypes)) {
            Model::validateArray($this->paramTypes);
        }
        if (\is_array($this->argumentItems)) {
            Model::validateArray($this->argumentItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->triggerPolicy) {
            $res['triggerPolicy'] = $this->triggerPolicy;
        }

        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }

        if (null !== $this->group) {
            $res['group'] = $this->group;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->methodName) {
            $res['methodName'] = $this->methodName;
        }

        if (null !== $this->paramTypes) {
            if (\is_array($this->paramTypes)) {
                $res['paramTypes'] = [];
                $n1 = 0;
                foreach ($this->paramTypes as $item1) {
                    $res['paramTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->condition) {
            $res['condition'] = $this->condition;
        }

        if (null !== $this->argumentItems) {
            if (\is_array($this->argumentItems)) {
                $res['argumentItems'] = [];
                $n1 = 0;
                foreach ($this->argumentItems as $item1) {
                    $res['argumentItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1++] = $item1;
                }
            }
        }

        if (isset($map['triggerPolicy'])) {
            $model->triggerPolicy = $map['triggerPolicy'];
        }

        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        if (isset($map['group'])) {
            $model->group = $map['group'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['methodName'])) {
            $model->methodName = $map['methodName'];
        }

        if (isset($map['paramTypes'])) {
            if (!empty($map['paramTypes'])) {
                $model->paramTypes = [];
                $n1 = 0;
                foreach ($map['paramTypes'] as $item1) {
                    $model->paramTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['condition'])) {
            $model->condition = $map['condition'];
        }

        if (isset($map['argumentItems'])) {
            if (!empty($map['argumentItems'])) {
                $model->argumentItems = [];
                $n1 = 0;
                foreach ($map['argumentItems'] as $item1) {
                    $model->argumentItems[$n1++] = argumentItems::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
