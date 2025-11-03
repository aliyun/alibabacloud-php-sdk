<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetAlertStrategyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetAlertStrategyResponseBody\data\strategy;

class data extends Model
{
    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $k8sLabel;

    /**
     * @var string
     */
    public $name;

    /**
     * @var strategy
     */
    public $strategy;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var int
     */
    public $updatedAt;
    protected $_name = [
        'createdAt' => 'createdAt',
        'enabled' => 'enabled',
        'id' => 'id',
        'k8sLabel' => 'k8sLabel',
        'name' => 'name',
        'strategy' => 'strategy',
        'uid' => 'uid',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        if (null !== $this->strategy) {
            $this->strategy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->k8sLabel) {
            $res['k8sLabel'] = $this->k8sLabel;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->strategy) {
            $res['strategy'] = null !== $this->strategy ? $this->strategy->toArray($noStream) : $this->strategy;
        }

        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['k8sLabel'])) {
            $model->k8sLabel = $map['k8sLabel'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['strategy'])) {
            $model->strategy = strategy::fromMap($map['strategy']);
        }

        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
