<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20180117\Models;

use AlibabaCloud\Tea\Model;

class ModifyWafSwitchRequest extends Model
{
    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $serviceOn;
    protected $_name = [
        'region'     => 'Region',
        'domain'     => 'Domain',
        'instanceId' => 'InstanceId',
        'serviceOn'  => 'ServiceOn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->serviceOn) {
            $res['ServiceOn'] = $this->serviceOn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyWafSwitchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ServiceOn'])) {
            $model->serviceOn = $map['ServiceOn'];
        }

        return $model;
    }
}
