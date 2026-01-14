<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCustomRoutingEndpointGroupResponseBody\serviceManagedInfos;

class DescribeCustomRoutingEndpointGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var string
     */
    public $accessLogSwitch;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableAccessLog;

    /**
     * @var string
     */
    public $endpointGroupId;

    /**
     * @var string[]
     */
    public $endpointGroupIpList;

    /**
     * @var string
     */
    public $endpointGroupRegion;

    /**
     * @var string[]
     */
    public $endpointGroupUnconfirmedIpList;

    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var bool
     */
    public $serviceManaged;

    /**
     * @var serviceManagedInfos[]
     */
    public $serviceManagedInfos;

    /**
     * @var string
     */
    public $slsLogStoreName;

    /**
     * @var string
     */
    public $slsProjectName;

    /**
     * @var string
     */
    public $slsRegion;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'acceleratorId' => 'AcceleratorId',
        'accessLogSwitch' => 'AccessLogSwitch',
        'description' => 'Description',
        'enableAccessLog' => 'EnableAccessLog',
        'endpointGroupId' => 'EndpointGroupId',
        'endpointGroupIpList' => 'EndpointGroupIpList',
        'endpointGroupRegion' => 'EndpointGroupRegion',
        'endpointGroupUnconfirmedIpList' => 'EndpointGroupUnconfirmedIpList',
        'listenerId' => 'ListenerId',
        'name' => 'Name',
        'requestId' => 'RequestId',
        'serviceId' => 'ServiceId',
        'serviceManaged' => 'ServiceManaged',
        'serviceManagedInfos' => 'ServiceManagedInfos',
        'slsLogStoreName' => 'SlsLogStoreName',
        'slsProjectName' => 'SlsProjectName',
        'slsRegion' => 'SlsRegion',
        'state' => 'State',
    ];

    public function validate()
    {
        if (\is_array($this->endpointGroupIpList)) {
            Model::validateArray($this->endpointGroupIpList);
        }
        if (\is_array($this->endpointGroupUnconfirmedIpList)) {
            Model::validateArray($this->endpointGroupUnconfirmedIpList);
        }
        if (\is_array($this->serviceManagedInfos)) {
            Model::validateArray($this->serviceManagedInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }

        if (null !== $this->accessLogSwitch) {
            $res['AccessLogSwitch'] = $this->accessLogSwitch;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enableAccessLog) {
            $res['EnableAccessLog'] = $this->enableAccessLog;
        }

        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }

        if (null !== $this->endpointGroupIpList) {
            if (\is_array($this->endpointGroupIpList)) {
                $res['EndpointGroupIpList'] = [];
                $n1 = 0;
                foreach ($this->endpointGroupIpList as $item1) {
                    $res['EndpointGroupIpList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endpointGroupRegion) {
            $res['EndpointGroupRegion'] = $this->endpointGroupRegion;
        }

        if (null !== $this->endpointGroupUnconfirmedIpList) {
            if (\is_array($this->endpointGroupUnconfirmedIpList)) {
                $res['EndpointGroupUnconfirmedIpList'] = [];
                $n1 = 0;
                foreach ($this->endpointGroupUnconfirmedIpList as $item1) {
                    $res['EndpointGroupUnconfirmedIpList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }

        if (null !== $this->serviceManagedInfos) {
            if (\is_array($this->serviceManagedInfos)) {
                $res['ServiceManagedInfos'] = [];
                $n1 = 0;
                foreach ($this->serviceManagedInfos as $item1) {
                    $res['ServiceManagedInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->slsLogStoreName) {
            $res['SlsLogStoreName'] = $this->slsLogStoreName;
        }

        if (null !== $this->slsProjectName) {
            $res['SlsProjectName'] = $this->slsProjectName;
        }

        if (null !== $this->slsRegion) {
            $res['SlsRegion'] = $this->slsRegion;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }

        if (isset($map['AccessLogSwitch'])) {
            $model->accessLogSwitch = $map['AccessLogSwitch'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnableAccessLog'])) {
            $model->enableAccessLog = $map['EnableAccessLog'];
        }

        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }

        if (isset($map['EndpointGroupIpList'])) {
            if (!empty($map['EndpointGroupIpList'])) {
                $model->endpointGroupIpList = [];
                $n1 = 0;
                foreach ($map['EndpointGroupIpList'] as $item1) {
                    $model->endpointGroupIpList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EndpointGroupRegion'])) {
            $model->endpointGroupRegion = $map['EndpointGroupRegion'];
        }

        if (isset($map['EndpointGroupUnconfirmedIpList'])) {
            if (!empty($map['EndpointGroupUnconfirmedIpList'])) {
                $model->endpointGroupUnconfirmedIpList = [];
                $n1 = 0;
                foreach ($map['EndpointGroupUnconfirmedIpList'] as $item1) {
                    $model->endpointGroupUnconfirmedIpList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }

        if (isset($map['ServiceManagedInfos'])) {
            if (!empty($map['ServiceManagedInfos'])) {
                $model->serviceManagedInfos = [];
                $n1 = 0;
                foreach ($map['ServiceManagedInfos'] as $item1) {
                    $model->serviceManagedInfos[$n1] = serviceManagedInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SlsLogStoreName'])) {
            $model->slsLogStoreName = $map['SlsLogStoreName'];
        }

        if (isset($map['SlsProjectName'])) {
            $model->slsProjectName = $map['SlsProjectName'];
        }

        if (isset($map['SlsRegion'])) {
            $model->slsRegion = $map['SlsRegion'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
