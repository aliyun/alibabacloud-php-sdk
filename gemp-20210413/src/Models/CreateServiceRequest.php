<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceRequest extends Model
{
    /**
     * @example C4BE3837-1A13-413B-A225-2C88188E8A43
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 服务描述
     *
     * @var string
     */
    public $serviceDescription;

    /**
     * @example 服务名称
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'clientToken'        => 'clientToken',
        'serviceDescription' => 'serviceDescription',
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
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceRequest
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
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        return $model;
    }
}
