<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class UpdateServiceRequest extends Model
{
    /**
     * @description 幂等号
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 服务描述
     *
     * @var string
     */
    public $serviceDescription;

    /**
     * @description 服务ID
     *
     * @var int
     */
    public $serviceId;

    /**
     * @description 服务名字
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'clientToken'        => 'clientToken',
        'serviceDescription' => 'serviceDescription',
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
        if (null !== $this->serviceDescription) {
            $res['serviceDescription'] = $this->serviceDescription;
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
        if (isset($map['serviceDescription'])) {
            $model->serviceDescription = $map['serviceDescription'];
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
