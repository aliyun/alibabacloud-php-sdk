<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody;

use AlibabaCloud\Dara\Model;

class expressivenessList extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $expressivenessId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $rule;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'desc' => 'desc',
        'enabled' => 'enabled',
        'expressivenessId' => 'expressivenessId',
        'name' => 'name',
        'rule' => 'rule',
        'type' => 'type',
        'weight' => 'weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->expressivenessId) {
            $res['expressivenessId'] = $this->expressivenessId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->rule) {
            $res['rule'] = $this->rule;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
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
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['expressivenessId'])) {
            $model->expressivenessId = $map['expressivenessId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['rule'])) {
            $model->rule = $map['rule'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}
