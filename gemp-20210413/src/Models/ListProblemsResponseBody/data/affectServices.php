<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemsResponseBody\data;

use AlibabaCloud\Tea\Model;

class affectServices extends Model
{
    /**
     * @example 服务描述
     *
     * @var string
     */
    public $serviceDescription;

    /**
     * @example 100
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
     * @example 2020-09-08 15:59:59
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'serviceDescription' => 'serviceDescription',
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
        if (null !== $this->serviceDescription) {
            $res['serviceDescription'] = $this->serviceDescription;
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
     * @return affectServices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['serviceDescription'])) {
            $model->serviceDescription = $map['serviceDescription'];
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
