<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewaySlbResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewaySlbResponseBody\data\VServiceList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the edit operation is supported.
     *
     * @example false
     *
     * @var bool
     */
    public $editEnable;

    /**
     * @description The ID of the gateway.
     *
     * @example 1
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @description The mode of the SLB instance.
     *
     * @example UserSelect
     *
     * @var string
     */
    public $gatewaySlbMode;

    /**
     * @description The association status.
     *
     * @example Ready
     *
     * @var string
     */
    public $gatewaySlbStatus;

    /**
     * @description The creation time.
     *
     * @example 2022-01-14 14:39:16
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The port number of the HTTP virtual service group.
     *
     * @example 80
     *
     * @var int
     */
    public $httpPort;

    /**
     * @description The port number of the HTTPS virtual service group.
     *
     * @example 443
     *
     * @var int
     */
    public $httpsPort;

    /**
     * @description The ID of the HTTPS virtual service group.
     *
     * @example 353
     *
     * @var string
     */
    public $httpsVServerGroupId;

    /**
     * @description The ID.
     *
     * @example ID
     *
     * @var string
     */
    public $id;

    /**
     * @description The service weight.
     *
     * @example 80
     *
     * @var int
     */
    public $serviceWeight;

    /**
     * @description The ID of the SLB instance.
     *
     * @example lb-bp1kmnli3hdpreptw2ah3
     *
     * @var string
     */
    public $slbId;

    /**
     * @description The IP address of the SLB instance.
     *
     * @example 121.199.XX.XX
     *
     * @var string
     */
    public $slbIp;

    /**
     * @description The port number of the SLB instance.
     *
     * @example 80,443
     *
     * @var string
     */
    public $slbPort;

    /**
     * @description The description of the status.
     *
     * @example Associating
     *
     * @var string
     */
    public $statusDesc;

    /**
     * @description The type.
     *
     * @example PUB_NET
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the HTTP virtual service group.
     *
     * @example 353
     *
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
        'statusDesc'          => 'StatusDesc',
        'type'                => 'Type',
        'VServerGroupId'      => 'VServerGroupId',
        'VServiceList'        => 'VServiceList',
        'vsMetaInfo'          => 'VsMetaInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['VServiceList'] = [];
            if (null !== $this->VServiceList && \is_array($this->VServiceList)) {
                $n = 0;
                foreach ($this->VServiceList as $item) {
                    $res['VServiceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vsMetaInfo) {
            $res['VsMetaInfo'] = $this->vsMetaInfo;
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
                $n                   = 0;
                foreach ($map['VServiceList'] as $item) {
                    $model->VServiceList[$n++] = null !== $item ? VServiceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VsMetaInfo'])) {
            $model->vsMetaInfo = $map['VsMetaInfo'];
        }

        return $model;
    }
}
