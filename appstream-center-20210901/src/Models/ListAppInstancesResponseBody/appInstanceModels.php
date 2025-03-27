<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstancesResponseBody\appInstanceModels\bindInfo;

class appInstanceModels extends Model
{
    /**
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @var string
     */
    public $appInstanceId;

    /**
     * @var bindInfo
     */
    public $bindInfo;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $mainEthPublicIp;

    /**
     * @var string
     */
    public $networkInterfaceIp;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $sessionStatus;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceId' => 'AppInstanceId',
        'bindInfo' => 'BindInfo',
        'chargeType' => 'ChargeType',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'mainEthPublicIp' => 'MainEthPublicIp',
        'networkInterfaceIp' => 'NetworkInterfaceIp',
        'nodeId' => 'NodeId',
        'sessionStatus' => 'SessionStatus',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->bindInfo) {
            $this->bindInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }

        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }

        if (null !== $this->bindInfo) {
            $res['BindInfo'] = null !== $this->bindInfo ? $this->bindInfo->toArray($noStream) : $this->bindInfo;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->mainEthPublicIp) {
            $res['MainEthPublicIp'] = $this->mainEthPublicIp;
        }

        if (null !== $this->networkInterfaceIp) {
            $res['NetworkInterfaceIp'] = $this->networkInterfaceIp;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->sessionStatus) {
            $res['SessionStatus'] = $this->sessionStatus;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }

        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }

        if (isset($map['BindInfo'])) {
            $model->bindInfo = bindInfo::fromMap($map['BindInfo']);
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['MainEthPublicIp'])) {
            $model->mainEthPublicIp = $map['MainEthPublicIp'];
        }

        if (isset($map['NetworkInterfaceIp'])) {
            $model->networkInterfaceIp = $map['NetworkInterfaceIp'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['SessionStatus'])) {
            $model->sessionStatus = $map['SessionStatus'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
