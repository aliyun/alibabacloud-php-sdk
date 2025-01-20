<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewaySlbResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewaySlbResponseBody\data\VServiceList;

class data extends Model
{
    /**
     * @var bool
     */
    public $editEnable;
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
     * @var int
     */
    public $httpPort;
    /**
     * @var int
     */
    public $httpsPort;
    /**
     * @var string
     */
    public $httpsVServerGroupId;
    /**
     * @var string
     */
    public $id;
    /**
     * @var int
     */
    public $serviceWeight;
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
    public $slbType;
    /**
     * @var string
     */
    public $statusDesc;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $VServerGroupId;
    /**
     * @var VServiceList[]
     */
    public $VServiceList;
    /**
     * @var string
     */
    public $vsMetaInfo;
    protected $_name = [
        'editEnable'          => 'EditEnable',
        'gatewayId'           => 'GatewayId',
        'gatewaySlbMode'      => 'GatewaySlbMode',
        'gatewaySlbStatus'    => 'GatewaySlbStatus',
        'gmtCreate'           => 'GmtCreate',
        'httpPort'            => 'HttpPort',
        'httpsPort'           => 'HttpsPort',
        'httpsVServerGroupId' => 'HttpsVServerGroupId',
        'id'                  => 'Id',
        'serviceWeight'       => 'ServiceWeight',
        'slbId'               => 'SlbId',
        'slbIp'               => 'SlbIp',
        'slbPort'             => 'SlbPort',
        'slbType'             => 'SlbType',
        'statusDesc'          => 'StatusDesc',
        'type'                => 'Type',
        'VServerGroupId'      => 'VServerGroupId',
        'VServiceList'        => 'VServiceList',
        'vsMetaInfo'          => 'VsMetaInfo',
    ];

    public function validate()
    {
        if (\is_array($this->VServiceList)) {
            Model::validateArray($this->VServiceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->editEnable) {
            $res['EditEnable'] = $this->editEnable;
        }

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

        if (null !== $this->httpPort) {
            $res['HttpPort'] = $this->httpPort;
        }

        if (null !== $this->httpsPort) {
            $res['HttpsPort'] = $this->httpsPort;
        }

        if (null !== $this->httpsVServerGroupId) {
            $res['HttpsVServerGroupId'] = $this->httpsVServerGroupId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->serviceWeight) {
            $res['ServiceWeight'] = $this->serviceWeight;
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

        if (null !== $this->slbType) {
            $res['SlbType'] = $this->slbType;
        }

        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }

        if (null !== $this->VServiceList) {
            if (\is_array($this->VServiceList)) {
                $res['VServiceList'] = [];
                $n1                  = 0;
                foreach ($this->VServiceList as $item1) {
                    $res['VServiceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vsMetaInfo) {
            $res['VsMetaInfo'] = $this->vsMetaInfo;
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
        if (isset($map['EditEnable'])) {
            $model->editEnable = $map['EditEnable'];
        }

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

        if (isset($map['HttpPort'])) {
            $model->httpPort = $map['HttpPort'];
        }

        if (isset($map['HttpsPort'])) {
            $model->httpsPort = $map['HttpsPort'];
        }

        if (isset($map['HttpsVServerGroupId'])) {
            $model->httpsVServerGroupId = $map['HttpsVServerGroupId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ServiceWeight'])) {
            $model->serviceWeight = $map['ServiceWeight'];
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

        if (isset($map['SlbType'])) {
            $model->slbType = $map['SlbType'];
        }

        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }

        if (isset($map['VServiceList'])) {
            if (!empty($map['VServiceList'])) {
                $model->VServiceList = [];
                $n1                  = 0;
                foreach ($map['VServiceList'] as $item1) {
                    $model->VServiceList[$n1++] = VServiceList::fromMap($item1);
                }
            }
        }

        if (isset($map['VsMetaInfo'])) {
            $model->vsMetaInfo = $map['VsMetaInfo'];
        }

        return $model;
    }
}
