<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class DeleteTrafficSpecialControlRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;
    /**
     * @var string
     */
    public $specialKey;
    /**
     * @var string
     */
    public $specialType;
    /**
     * @var string
     */
    public $trafficControlId;
    protected $_name = [
        'securityToken'    => 'SecurityToken',
        'specialKey'       => 'SpecialKey',
        'specialType'      => 'SpecialType',
        'trafficControlId' => 'TrafficControlId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->specialKey) {
            $res['SpecialKey'] = $this->specialKey;
        }

        if (null !== $this->specialType) {
            $res['SpecialType'] = $this->specialType;
        }

        if (null !== $this->trafficControlId) {
            $res['TrafficControlId'] = $this->trafficControlId;
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['SpecialKey'])) {
            $model->specialKey = $map['SpecialKey'];
        }

        if (isset($map['SpecialType'])) {
            $model->specialType = $map['SpecialType'];
        }

        if (isset($map['TrafficControlId'])) {
            $model->trafficControlId = $map['TrafficControlId'];
        }

        return $model;
    }
}
