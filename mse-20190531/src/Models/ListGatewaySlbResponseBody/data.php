<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewaySlbResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $gatewayId;

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
    public $gmtCreate;

    /**
     * @var string
     */
    public $id;

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
    public $statusDesc;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'gatewayId'        => 'GatewayId',
        'gatewaySlbMode'   => 'GatewaySlbMode',
        'gatewaySlbStatus' => 'GatewaySlbStatus',
        'gmtCreate'        => 'GmtCreate',
        'id'               => 'Id',
        'slbId'            => 'SlbId',
        'slbIp'            => 'SlbIp',
        'slbPort'          => 'SlbPort',
        'statusDesc'       => 'StatusDesc',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewaySlbMode) {
            $res['GatewaySlbMode'] = $this->gatewaySlbMode;
        }
        if (null !== $this->gatewaySlbStatus) {
            $res['GatewaySlbStatus'] = $this->gatewaySlbStatus;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewaySlbMode'])) {
            $model->gatewaySlbMode = $map['GatewaySlbMode'];
        }
        if (isset($map['GatewaySlbStatus'])) {
            $model->gatewaySlbStatus = $map['GatewaySlbStatus'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
