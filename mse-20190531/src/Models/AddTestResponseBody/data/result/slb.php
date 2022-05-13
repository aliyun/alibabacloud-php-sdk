<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\AddTestResponseBody\data\result;

use AlibabaCloud\Tea\Model;

class slb extends Model
{
    /**
     * @var string
     */
    public $gatewaySlbMode;

    /**
     * @var string
     */
    public $gatewaySlbStatus;

    /**
     * @var string
     */
    public $slbId;

    /**
     * @var string
     */
    public $slbIp;

    /**
     * @var string
     */
    public $slbPort;

    /**
     * @var string
     */
    public $slbSpec;

    /**
     * @var string
     */
    public $statusDesc;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'gatewaySlbMode'   => 'GatewaySlbMode',
        'gatewaySlbStatus' => 'GatewaySlbStatus',
        'slbId'            => 'SlbId',
        'slbIp'            => 'SlbIp',
        'slbPort'          => 'SlbPort',
        'slbSpec'          => 'SlbSpec',
        'statusDesc'       => 'StatusDesc',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewaySlbMode) {
            $res['GatewaySlbMode'] = $this->gatewaySlbMode;
        }
        if (null !== $this->gatewaySlbStatus) {
            $res['GatewaySlbStatus'] = $this->gatewaySlbStatus;
        }
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }
        if (null !== $this->slbIp) {
            $res['SlbIp'] = $this->slbIp;
        }
        if (null !== $this->slbPort) {
            $res['SlbPort'] = $this->slbPort;
        }
        if (null !== $this->slbSpec) {
            $res['SlbSpec'] = $this->slbSpec;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slb
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewaySlbMode'])) {
            $model->gatewaySlbMode = $map['GatewaySlbMode'];
        }
        if (isset($map['GatewaySlbStatus'])) {
            $model->gatewaySlbStatus = $map['GatewaySlbStatus'];
        }
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }
        if (isset($map['SlbIp'])) {
            $model->slbIp = $map['SlbIp'];
        }
        if (isset($map['SlbPort'])) {
            $model->slbPort = $map['SlbPort'];
        }
        if (isset($map['SlbSpec'])) {
            $model->slbSpec = $map['SlbSpec'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
