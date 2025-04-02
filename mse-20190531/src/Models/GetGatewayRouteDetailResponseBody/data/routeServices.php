<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailResponseBody\data\routeServices\httpDubboTranscoder;

class routeServices extends Model
{
    /**
     * @var string
     */
    public $agreementType;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $healthStatus;

    /**
     * @var httpDubboTranscoder
     */
    public $httpDubboTranscoder;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $percent;

    /**
     * @var int
     */
    public $serviceId;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var int
     */
    public $servicePort;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string[]
     */
    public $unhealthyEndpoints;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'agreementType' => 'AgreementType',
        'groupName' => 'GroupName',
        'healthStatus' => 'HealthStatus',
        'httpDubboTranscoder' => 'HttpDubboTranscoder',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'percent' => 'Percent',
        'serviceId' => 'ServiceId',
        'serviceName' => 'ServiceName',
        'servicePort' => 'ServicePort',
        'sourceType' => 'SourceType',
        'unhealthyEndpoints' => 'UnhealthyEndpoints',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (null !== $this->httpDubboTranscoder) {
            $this->httpDubboTranscoder->validate();
        }
        if (\is_array($this->unhealthyEndpoints)) {
            Model::validateArray($this->unhealthyEndpoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agreementType) {
            $res['AgreementType'] = $this->agreementType;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }

        if (null !== $this->httpDubboTranscoder) {
            $res['HttpDubboTranscoder'] = null !== $this->httpDubboTranscoder ? $this->httpDubboTranscoder->toArray($noStream) : $this->httpDubboTranscoder;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        if (null !== $this->servicePort) {
            $res['ServicePort'] = $this->servicePort;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->unhealthyEndpoints) {
            if (\is_array($this->unhealthyEndpoints)) {
                $res['UnhealthyEndpoints'] = [];
                $n1 = 0;
                foreach ($this->unhealthyEndpoints as $item1) {
                    $res['UnhealthyEndpoints'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgreementType'])) {
            $model->agreementType = $map['AgreementType'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }

        if (isset($map['HttpDubboTranscoder'])) {
            $model->httpDubboTranscoder = httpDubboTranscoder::fromMap($map['HttpDubboTranscoder']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        if (isset($map['ServicePort'])) {
            $model->servicePort = $map['ServicePort'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['UnhealthyEndpoints'])) {
            if (!empty($map['UnhealthyEndpoints'])) {
                $model->unhealthyEndpoints = [];
                $n1 = 0;
                foreach ($map['UnhealthyEndpoints'] as $item1) {
                    $model->unhealthyEndpoints[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
