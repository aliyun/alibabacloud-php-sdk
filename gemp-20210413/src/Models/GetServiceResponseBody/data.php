<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $escalationPlanId;

    /**
     * @var string
     */
    public $serviceDescription;

    /**
     * @var int[]
     */
    public $serviceGroupIdList;

    /**
     * @example 1
     *
     * @var int
     */
    public $serviceId;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @example 2020-03-08 12:53:53
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'escalationPlanId'   => 'escalationPlanId',
        'serviceDescription' => 'serviceDescription',
        'serviceGroupIdList' => 'serviceGroupIdList',
        'serviceId'          => 'serviceId',
        'serviceName'        => 'serviceName',
        'updateTime'         => 'updateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
