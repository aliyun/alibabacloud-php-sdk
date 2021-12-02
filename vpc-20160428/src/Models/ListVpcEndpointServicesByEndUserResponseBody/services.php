<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpcEndpointServicesByEndUserResponseBody;

use AlibabaCloud\Tea\Model;

class services extends Model
{
    /**
     * @var string
     */
    public $defaultPolicyDocument;

    /**
     * @var string
     */
    public $serviceDomain;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var bool
     */
    public $supportPolicy;
    protected $_name = [
        'defaultPolicyDocument' => 'DefaultPolicyDocument',
        'serviceDomain'         => 'ServiceDomain',
        'serviceId'             => 'ServiceId',
        'serviceName'           => 'ServiceName',
        'supportPolicy'         => 'SupportPolicy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultPolicyDocument) {
            $res['DefaultPolicyDocument'] = $this->defaultPolicyDocument;
        }
        if (null !== $this->serviceDomain) {
            $res['ServiceDomain'] = $this->serviceDomain;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->supportPolicy) {
            $res['SupportPolicy'] = $this->supportPolicy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return services
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultPolicyDocument'])) {
            $model->defaultPolicyDocument = $map['DefaultPolicyDocument'];
        }
        if (isset($map['ServiceDomain'])) {
            $model->serviceDomain = $map['ServiceDomain'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['SupportPolicy'])) {
            $model->supportPolicy = $map['SupportPolicy'];
        }

        return $model;
    }
}
