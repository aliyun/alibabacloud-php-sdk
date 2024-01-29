<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListIntegratedServiceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The types of the integrated events. Separate multiple event types with commas (,). Valid values:
     *
     *   ConfigurationItemChangeNotification: resource change event
     *   NonCompliantNotification: non-compliance event
     *
     * @example NonCompliantNotification
     *
     * @var string
     */
    public $integratedTypes;

    /**
     * @description The identifier of the cloud service. Valid values:
     *
     *   eventbridge: event bus
     *   cms: CloudMonitor
     *   bpstudio: Cloud Architect Design Tools (CADT)
     *
     * @example cms
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @description The name of the cloud service.
     *
     * @example cms
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The integration status of the cloud service. Valid values:
     *
     *   1: The cloud service is integrated.
     *   0: The cloud service is not integrated.
     *
     * @example true
     *
     * @var bool
     */
    public $status;
    protected $_name = [
        'integratedTypes' => 'IntegratedTypes',
        'serviceCode'     => 'ServiceCode',
        'serviceName'     => 'ServiceName',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->integratedTypes) {
            $res['IntegratedTypes'] = $this->integratedTypes;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntegratedTypes'])) {
            $model->integratedTypes = $map['IntegratedTypes'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
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
