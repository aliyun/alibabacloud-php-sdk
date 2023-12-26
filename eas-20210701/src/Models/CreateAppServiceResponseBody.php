<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class CreateAppServiceResponseBody extends Model
{
    /**
     * @description The public endpoint of the service.
     *
     * @example http://pai-eas.cn-shanghai.****
     *
     * @var string
     */
    public $internetEndpoint;

    /**
     * @description The internal endpoint of the service.
     *
     * @example http://pai-eas-vpc.cn-shanghai.****
     *
     * @var string
     */
    public $intranetEndpoint;

    /**
     * @description The region ID of the service.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The request ID.
     *
     * @example 40325405-579C-4D82****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The service ID.
     *
     * @example eas-m-aaxxxddf
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The service name.
     *
     * @example foo
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The service state.
     *
     * @example Creating
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'internetEndpoint' => 'InternetEndpoint',
        'intranetEndpoint' => 'IntranetEndpoint',
        'region'           => 'Region',
        'requestId'        => 'RequestId',
        'serviceId'        => 'ServiceId',
        'serviceName'      => 'ServiceName',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->internetEndpoint) {
            $res['InternetEndpoint'] = $this->internetEndpoint;
        }
        if (null !== $this->intranetEndpoint) {
            $res['IntranetEndpoint'] = $this->intranetEndpoint;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InternetEndpoint'])) {
            $model->internetEndpoint = $map['InternetEndpoint'];
        }
        if (isset($map['IntranetEndpoint'])) {
            $model->intranetEndpoint = $map['IntranetEndpoint'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
