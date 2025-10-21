<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\CreatePolicyRequest;

use AlibabaCloud\Dara\Model;

class sensitiveConfigList extends Model
{
    /**
     * @var int
     */
    public $actionType;

    /**
     * @var int
     */
    public $isEnabled;

    /**
     * @var int
     */
    public $sensitiveConfigId;
    protected $_name = [
        'actionType' => 'ActionType',
        'isEnabled' => 'IsEnabled',
        'sensitiveConfigId' => 'SensitiveConfigId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }

        if (null !== $this->isEnabled) {
            $res['IsEnabled'] = $this->isEnabled;
        }

        if (null !== $this->sensitiveConfigId) {
            $res['SensitiveConfigId'] = $this->sensitiveConfigId;
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
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }

        if (isset($map['IsEnabled'])) {
            $model->isEnabled = $map['IsEnabled'];
        }

        if (isset($map['SensitiveConfigId'])) {
            $model->sensitiveConfigId = $map['SensitiveConfigId'];
        }

        return $model;
    }
}
