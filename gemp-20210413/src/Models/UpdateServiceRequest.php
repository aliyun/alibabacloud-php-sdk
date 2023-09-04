<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class UpdateServiceRequest extends Model
{
    /**
     * @example C4BE3837-1A13-413B-A225-2C88188E8A43
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $escalationPlanId;

    /**
     * @example 服务描述
     *
     * @var string
     */
    public $serviceDescription;

    /**
     * @var int[]
     */
    public $serviceGroupIdList;

    /**
     * @example 10002000
     *
     * @var int
     */
    public $serviceId;

    /**
     * @example 服务名字
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'clientToken'        => 'clientToken',
        'escalationPlanId'   => 'escalationPlanId',
        'serviceDescription' => 'serviceDescription',
        'serviceGroupIdList' => 'serviceGroupIdList',
        'serviceId'          => 'serviceId',
        'serviceName'        => 'serviceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->escalationPlanId) {
            $res['escalationPlanId'] = $this->escalationPlanId;
        }
        if (null !== $this->serviceDescription) {
            $res['serviceDescription'] = $this->serviceDescription;
        }
        if (null !== $this->serviceGroupIdList) {
            $res['serviceGroupIdList'] = $this->serviceGroupIdList;
        }
        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['escalationPlanId'])) {
            $model->escalationPlanId = $map['escalationPlanId'];
        }
        if (isset($map['serviceDescription'])) {
            $model->serviceDescription = $map['serviceDescription'];
        }
        if (isset($map['serviceGroupIdList'])) {
            if (!empty($map['serviceGroupIdList'])) {
                $model->serviceGroupIdList = $map['serviceGroupIdList'];
            }
        }
        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        return $model;
    }
}
