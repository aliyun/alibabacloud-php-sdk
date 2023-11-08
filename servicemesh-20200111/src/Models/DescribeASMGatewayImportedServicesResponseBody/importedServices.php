<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeASMGatewayImportedServicesResponseBody;

use AlibabaCloud\Tea\Model;

class importedServices extends Model
{
    /**
     * @description The name of a service.
     *
     * @example productpage
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The namespace in which the service resides.
     *
     * @example default
     *
     * @var string
     */
    public $serviceNamespace;
    protected $_name = [
        'serviceName'      => 'ServiceName',
        'serviceNamespace' => 'ServiceNamespace',
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
        if (null !== $this->serviceNamespace) {
            $res['ServiceNamespace'] = $this->serviceNamespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return importedServices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceNamespace'])) {
            $model->serviceNamespace = $map['ServiceNamespace'];
        }

        return $model;
    }
}
