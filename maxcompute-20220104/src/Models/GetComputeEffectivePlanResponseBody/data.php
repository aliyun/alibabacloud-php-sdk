<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetComputeEffectivePlanResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetComputeEffectivePlanResponseBody\data\quota;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $isEffective;

    /**
     * @var string
     */
    public $name;

    /**
     * @var quota
     */
    public $quota;
    protected $_name = [
        'createTime' => 'createTime',
        'isEffective' => 'isEffective',
        'name' => 'name',
        'quota' => 'quota',
    ];

    public function validate()
    {
        if (null !== $this->quota) {
            $this->quota->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->isEffective) {
            $res['isEffective'] = $this->isEffective;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->quota) {
            $res['quota'] = null !== $this->quota ? $this->quota->toArray($noStream) : $this->quota;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['isEffective'])) {
            $model->isEffective = $map['isEffective'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['quota'])) {
            $model->quota = quota::fromMap($map['quota']);
        }

        return $model;
    }
}
