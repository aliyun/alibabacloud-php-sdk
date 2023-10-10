<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sIngressRulesResponseBody\data\ingressConfs\rules\paths;

use AlibabaCloud\Tea\Model;

class backend extends Model
{
    /**
     * @description The name of the backend service.
     *
     * @example http-service
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The port of the backend service.
     *
     * @example 8080
     *
     * @var string
     */
    public $servicePort;
    protected $_name = [
        'serviceName' => 'ServiceName',
        'servicePort' => 'ServicePort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->servicePort) {
            $res['ServicePort'] = $this->servicePort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backend
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServicePort'])) {
            $model->servicePort = $map['ServicePort'];
        }

        return $model;
    }
}
