<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDeployConfig\policyConfigs\aiSecurityGuardConfig;

use AlibabaCloud\Dara\Model;

class consumerRiskLevel extends Model
{
    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $matchType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'level' => 'level',
        'matchType' => 'matchType',
        'name' => 'name',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }

        if (null !== $this->matchType) {
            $res['matchType'] = $this->matchType;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        if (isset($map['matchType'])) {
            $model->matchType = $map['matchType'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
