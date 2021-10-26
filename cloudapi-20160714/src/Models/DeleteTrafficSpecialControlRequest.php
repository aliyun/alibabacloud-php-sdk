<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DeleteTrafficSpecialControlRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $trafficControlId;

    /**
     * @var string
     */
    public $specialType;

    /**
     * @var string
     */
    public $specialKey;
    protected $_name = [
        'securityToken'    => 'SecurityToken',
        'trafficControlId' => 'TrafficControlId',
        'specialType'      => 'SpecialType',
        'specialKey'       => 'SpecialKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->trafficControlId) {
            $res['TrafficControlId'] = $this->trafficControlId;
        }
        if (null !== $this->specialType) {
            $res['SpecialType'] = $this->specialType;
        }
        if (null !== $this->specialKey) {
            $res['SpecialKey'] = $this->specialKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTrafficSpecialControlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['TrafficControlId'])) {
            $model->trafficControlId = $map['TrafficControlId'];
        }
        if (isset($map['SpecialType'])) {
            $model->specialType = $map['SpecialType'];
        }
        if (isset($map['SpecialKey'])) {
            $model->specialKey = $map['SpecialKey'];
        }

        return $model;
    }
}
