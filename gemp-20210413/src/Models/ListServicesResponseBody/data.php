<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListServicesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $escalationPlanId;

    /**
     * @var string
     */
    public $escalationPlanName;

    /**
     * @var int
     */
    public $isValid;

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
     * @example 1
     *
     * @var int
     */
    public $serviceId;

    /**
     * @example 冲上云霄
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example 2020-09-08 14:30:30
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'escalationPlanId'   => 'escalationPlanId',
        'escalationPlanName' => 'escalationPlanName',
        'isValid'            => 'isValid',
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
        if (null !== $this->escalationPlanName) {
            $res['escalationPlanName'] = $this->escalationPlanName;
        }
        if (null !== $this->isValid) {
            $res['isValid'] = $this->isValid;
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
        if (isset($map['escalationPlanName'])) {
            $model->escalationPlanName = $map['escalationPlanName'];
        }
        if (isset($map['isValid'])) {
            $model->isValid = $map['isValid'];
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
