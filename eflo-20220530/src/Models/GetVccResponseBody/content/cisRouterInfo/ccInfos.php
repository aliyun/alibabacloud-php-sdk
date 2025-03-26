<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody\content\cisRouterInfo;

use AlibabaCloud\Dara\Model;

class ccInfos extends Model
{
    /**
     * @var string
     */
    public $ccId;

    /**
     * @var string
     */
    public $localGatewayIp;

    /**
     * @var string
     */
    public $remoteGatewayIp;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subnetMask;

    /**
     * @var string
     */
    public $vlanId;
    protected $_name = [
        'ccId' => 'CcId',
        'localGatewayIp' => 'LocalGatewayIp',
        'remoteGatewayIp' => 'RemoteGatewayIp',
        'status' => 'Status',
        'subnetMask' => 'SubnetMask',
        'vlanId' => 'VlanId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ccId) {
            $res['CcId'] = $this->ccId;
        }

        if (null !== $this->localGatewayIp) {
            $res['LocalGatewayIp'] = $this->localGatewayIp;
        }

        if (null !== $this->remoteGatewayIp) {
            $res['RemoteGatewayIp'] = $this->remoteGatewayIp;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subnetMask) {
            $res['SubnetMask'] = $this->subnetMask;
        }

        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
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
        if (isset($map['CcId'])) {
            $model->ccId = $map['CcId'];
        }

        if (isset($map['LocalGatewayIp'])) {
            $model->localGatewayIp = $map['LocalGatewayIp'];
        }

        if (isset($map['RemoteGatewayIp'])) {
            $model->remoteGatewayIp = $map['RemoteGatewayIp'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubnetMask'])) {
            $model->subnetMask = $map['SubnetMask'];
        }

        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }

        return $model;
    }
}
