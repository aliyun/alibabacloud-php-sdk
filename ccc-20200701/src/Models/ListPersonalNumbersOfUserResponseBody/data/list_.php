<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListPersonalNumbersOfUserResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var bool
     */
    public $active;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $contactFlowId;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'active'        => 'Active',
        'number'        => 'Number',
        'city'          => 'City',
        'instanceId'    => 'InstanceId',
        'contactFlowId' => 'ContactFlowId',
        'province'      => 'Province',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->contactFlowId) {
            $res['ContactFlowId'] = $this->contactFlowId;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ContactFlowId'])) {
            $model->contactFlowId = $map['ContactFlowId'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
