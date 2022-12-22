<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInvadeEventListResponseBody;

use AlibabaCloud\Tea\Model;

class eventList extends Model
{
    /**
     * @description The ID of the affected asset.
     *
     * @example i-ECS****
     *
     * @var string
     */
    public $assetsInstanceId;

    /**
     * @description The name of the affected asset.
     *
     * @example ECS_test
     *
     * @var string
     */
    public $assetsInstanceName;

    /**
     * @description The type of the affected asset. Valid values:
     *
     * **BastionHostIP**: the egress IP address of a bastion host
     * **BastionHostIngressIP**: the ingress IP address of a bastion host
     * **EcsEIP**: the elastic IP address (EIP) of an Elastic Compute Service (ECS) instance
     * **EcsPublicIP**: the public IP address of an ECS instance
     * **EIP**: the EIP
     * **EniEIP**: the EIP of an elastic network interface (ENI)
     * **NatEIP**: the EIP of a NAT gateway
     * **SlbEIP**: the EIP of a Server Load Balancer (SLB) instance
     * **SlbPublicIP**: the public IP address of an SLB instance
     * **NatPublicIP**: the public IP address of a NAT gateway
     * **HAVIP**: the high-availability virtual IP address (HAVIP)
     *
     * @example EcsPublicIp
     *
     * @var string
     */
    public $assetsType;

    /**
     * @description The ID of the breach awareness event.
     *
     * @example 69d189e2-ec17-4676-a2fe-02969234****
     *
     * @var string
     */
    public $eventKey;

    /**
     * @description The name of the breach awareness event.
     *
     * @example event_test
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The type of the breach awareness event. Valid values:
     *
     *   **IPS**: intrusion prevention event
     *   **offline**: disconnection event
     *
     * @example IPS
     *
     * @var string
     */
    public $eventSrc;

    /**
     * @description The UUID of the breach awareness event.
     *
     * @example fadd-dfdd-****
     *
     * @var string
     */
    public $eventUuid;

    /**
     * @description The time when the breach awareness event first occurred. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1656750960
     *
     * @var int
     */
    public $firstTime;

    /**
     * @description Indicates whether the breach awareness event is ignored. Valid values:
     *
     *   **true**: The breach awareness event is ignored.
     *   **false**: The breach awareness event is not ignored.
     *
     * @example true
     *
     * @var bool
     */
    public $isIgnore;

    /**
     * @description The time when the breach awareness event last occurred. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1656837360
     *
     * @var int
     */
    public $lastTime;

    /**
     * @description The ID of the member.
     *
     * @example 135809047715****
     *
     * @var string
     */
    public $memberUid;

    /**
     * @description The private IP address of the affected asset.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $privateIP;

    /**
     * @description The handling status of the breach awareness event. Valid values:
     *
     *   **0**: unhandled
     *   **20**: handled
     *
     * @example 20
     *
     * @var int
     */
    public $processStatus;

    /**
     * @description The public IP address of the affected asset.
     *
     * @example 198.51.XX.XX
     *
     * @var string
     */
    public $publicIP;

    /**
     * @description The type of the affected asset. Valid values:
     *
     * **BastionHostIP**: the egress IP address of a bastion host
     * **BastionHostIngressIP**: the ingress IP address of a bastion host
     * **EcsEIP**: the EIP of an ECS instance
     * **EcsPublicIP**: the public IP address of an ECS instance
     * **EIP**: the EIP
     * **EniEIP**: the EIP of an ENI
     * **NatEIP**: the EIP of a NAT gateway
     * **SlbEIP**: the EIP of an SLB instance
     * **SlbPublicIP**: the public IP address of an SLB instance
     * **NatPublicIP**: the public IP address of a NAT gateway
     * **HAVIP**: the HAVIP
     *
     * @example EcsPublicIp
     *
     * @var string
     */
    public $publicIpType;

    /**
     * @description The risk level. Valid values:
     *
     *   **1**: low
     *   **2**: medium
     *   **3**: high
     *
     * @example 1
     *
     * @var int
     */
    public $riskLevel;
    protected $_name = [
        'assetsInstanceId'   => 'AssetsInstanceId',
        'assetsInstanceName' => 'AssetsInstanceName',
        'assetsType'         => 'AssetsType',
        'eventKey'           => 'EventKey',
        'eventName'          => 'EventName',
        'eventSrc'           => 'EventSrc',
        'eventUuid'          => 'EventUuid',
        'firstTime'          => 'FirstTime',
        'isIgnore'           => 'IsIgnore',
        'lastTime'           => 'LastTime',
        'memberUid'          => 'MemberUid',
        'privateIP'          => 'PrivateIP',
        'processStatus'      => 'ProcessStatus',
        'publicIP'           => 'PublicIP',
        'publicIpType'       => 'PublicIpType',
        'riskLevel'          => 'RiskLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetsInstanceId) {
            $res['AssetsInstanceId'] = $this->assetsInstanceId;
        }
        if (null !== $this->assetsInstanceName) {
            $res['AssetsInstanceName'] = $this->assetsInstanceName;
        }
        if (null !== $this->assetsType) {
            $res['AssetsType'] = $this->assetsType;
        }
        if (null !== $this->eventKey) {
            $res['EventKey'] = $this->eventKey;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventSrc) {
            $res['EventSrc'] = $this->eventSrc;
        }
        if (null !== $this->eventUuid) {
            $res['EventUuid'] = $this->eventUuid;
        }
        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }
        if (null !== $this->isIgnore) {
            $res['IsIgnore'] = $this->isIgnore;
        }
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->privateIP) {
            $res['PrivateIP'] = $this->privateIP;
        }
        if (null !== $this->processStatus) {
            $res['ProcessStatus'] = $this->processStatus;
        }
        if (null !== $this->publicIP) {
            $res['PublicIP'] = $this->publicIP;
        }
        if (null !== $this->publicIpType) {
            $res['PublicIpType'] = $this->publicIpType;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetsInstanceId'])) {
            $model->assetsInstanceId = $map['AssetsInstanceId'];
        }
        if (isset($map['AssetsInstanceName'])) {
            $model->assetsInstanceName = $map['AssetsInstanceName'];
        }
        if (isset($map['AssetsType'])) {
            $model->assetsType = $map['AssetsType'];
        }
        if (isset($map['EventKey'])) {
            $model->eventKey = $map['EventKey'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventSrc'])) {
            $model->eventSrc = $map['EventSrc'];
        }
        if (isset($map['EventUuid'])) {
            $model->eventUuid = $map['EventUuid'];
        }
        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }
        if (isset($map['IsIgnore'])) {
            $model->isIgnore = $map['IsIgnore'];
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['PrivateIP'])) {
            $model->privateIP = $map['PrivateIP'];
        }
        if (isset($map['ProcessStatus'])) {
            $model->processStatus = $map['ProcessStatus'];
        }
        if (isset($map['PublicIP'])) {
            $model->publicIP = $map['PublicIP'];
        }
        if (isset($map['PublicIpType'])) {
            $model->publicIpType = $map['PublicIpType'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
