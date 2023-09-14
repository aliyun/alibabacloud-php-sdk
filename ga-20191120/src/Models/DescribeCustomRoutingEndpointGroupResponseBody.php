<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCustomRoutingEndpointGroupResponseBody\serviceManagedInfos;
use AlibabaCloud\Tea\Model;

class DescribeCustomRoutingEndpointGroupResponseBody extends Model
{
    /**
     * @description The GA instance ID.
     *
     * @example ga-bp1odcab8tmno0hdq****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description Indicates the status of the binding between the Log Service project and the endpoint group. Valid values:
     *
     *   **on:** The endpoint group is bound to the Log Service project.
     *   **off:** The endpoint group is not bound to the Log Service project.
     *   **binding:** The endpoint group is being bound to the Log Service project.
     *   **unbinding:** The endpoint group is being unbound from the Log Service project.
     *
     * @example on
     *
     * @var string
     */
    public $accessLogSwitch;

    /**
     * @description The description of the endpoint group.
     *
     * @example EndpointGroup
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the access log feature is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enableAccessLog;

    /**
     * @description The endpoint group ID.
     *
     * @example epg-bp1dmlohjjz4kqaua****
     *
     * @var string
     */
    public $endpointGroupId;

    /**
     * @description The endpoint group IP addresses.
     *
     * @var string[]
     */
    public $endpointGroupIpList;

    /**
     * @description The region ID of the endpoint group.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $endpointGroupRegion;

    /**
     * @description The endpoint group IP addresses that need to be confirmed after the GA instance is upgraded.
     *
     * @var string[]
     */
    public $endpointGroupUnconfirmedIpList;

    /**
     * @description The custom routing listener ID.
     *
     * @example lsr-bp1bpn0kn908w4nbw****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The name of the endpoint group.
     *
     * @example group1
     *
     * @var string
     */
    public $name;

    /**
     * @description The request ID.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 托管实例所属的服务方ID。
     * > 仅在**ServiceManaged**参数为**True**时有效。
     * @example ALB
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description 是否为托管实例。取值：
     *
     * - **true**：是托管实例。
     *
     * - **false**：不是托管实例。
     * @example true
     *
     * @var bool
     */
    public $serviceManaged;

    /**
     * @description 用户在此托管实例下可执行的动作策略列表。
     *
     * > 仅在**ServiceManaged**参数为**True**时有效。
     * > - 当实例处于托管状态时，用户对实例的操作会受到限制，某些操作行为会被禁止。
     * @var serviceManagedInfos[]
     */
    public $serviceManagedInfos;

    /**
     * @description The name of the Logstore.
     *
     * @example lsn-01
     *
     * @var string
     */
    public $slsLogStoreName;

    /**
     * @description The name of the Log Service project.
     *
     * @example pn-01
     *
     * @var string
     */
    public $slsProjectName;

    /**
     * @description The region of the logs that are created in Log Service.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $slsRegion;

    /**
     * @description The status of the endpoint group. Valid values:
     *
     *   **init:** The endpoint group is being initialized.
     *   **active:** The endpoint group is running normally.
     *   **updating:** The endpoint group is being updated.
     *   **deleting:** The ACL is being deleted.
     *
     * @example active
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'acceleratorId'                  => 'AcceleratorId',
        'accessLogSwitch'                => 'AccessLogSwitch',
        'description'                    => 'Description',
        'enableAccessLog'                => 'EnableAccessLog',
        'endpointGroupId'                => 'EndpointGroupId',
        'endpointGroupIpList'            => 'EndpointGroupIpList',
        'endpointGroupRegion'            => 'EndpointGroupRegion',
        'endpointGroupUnconfirmedIpList' => 'EndpointGroupUnconfirmedIpList',
        'listenerId'                     => 'ListenerId',
        'name'                           => 'Name',
        'requestId'                      => 'RequestId',
        'serviceId'                      => 'ServiceId',
        'serviceManaged'                 => 'ServiceManaged',
        'serviceManagedInfos'            => 'ServiceManagedInfos',
        'slsLogStoreName'                => 'SlsLogStoreName',
        'slsProjectName'                 => 'SlsProjectName',
        'slsRegion'                      => 'SlsRegion',
        'state'                          => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['EndpointGroupIpList'] = $this->endpointGroupIpList;
        }
        if (null !== $this->endpointGroupRegion) {
            $res['EndpointGroupRegion'] = $this->endpointGroupRegion;
        }
        if (null !== $this->endpointGroupUnconfirmedIpList) {
            $res['EndpointGroupUnconfirmedIpList'] = $this->endpointGroupUnconfirmedIpList;
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
            $res['ServiceManagedInfos'] = [];
            if (null !== $this->serviceManagedInfos && \is_array($this->serviceManagedInfos)) {
                $n = 0;
                foreach ($this->serviceManagedInfos as $item) {
                    $res['ServiceManagedInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribeCustomRoutingEndpointGroupResponseBody
     */
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
                $model->endpointGroupIpList = $map['EndpointGroupIpList'];
            }
        }
        if (isset($map['EndpointGroupRegion'])) {
            $model->endpointGroupRegion = $map['EndpointGroupRegion'];
        }
        if (isset($map['EndpointGroupUnconfirmedIpList'])) {
            if (!empty($map['EndpointGroupUnconfirmedIpList'])) {
                $model->endpointGroupUnconfirmedIpList = $map['EndpointGroupUnconfirmedIpList'];
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
                $n                          = 0;
                foreach ($map['ServiceManagedInfos'] as $item) {
                    $model->serviceManagedInfos[$n++] = null !== $item ? serviceManagedInfos::fromMap($item) : $item;
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
