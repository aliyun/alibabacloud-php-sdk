<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\RulesValue\rules;

use AlibabaCloud\SDK\Mse\V20190531\Models\RulesValue\rules\dubbo\argumentItems;
use AlibabaCloud\Tea\Model;

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
     * @example AND
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
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
            $res['paramTypes'] = $this->paramTypes;
        }
        if (null !== $this->condition) {
            $res['condition'] = $this->condition;
        }
        if (null !== $this->argumentItems) {
            $res['argumentItems'] = [];
            if (null !== $this->argumentItems && \is_array($this->argumentItems)) {
                $n = 0;
                foreach ($this->argumentItems as $item) {
                    $res['argumentItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dubbo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = $map['tags'];
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
                $model->paramTypes = $map['paramTypes'];
            }
        }
        if (isset($map['condition'])) {
            $model->condition = $map['condition'];
        }
        if (isset($map['argumentItems'])) {
            if (!empty($map['argumentItems'])) {
                $model->argumentItems = [];
                $n = 0;
                foreach ($map['argumentItems'] as $item) {
                    $model->argumentItems[$n++] = null !== $item ? argumentItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
