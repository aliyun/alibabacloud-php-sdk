<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail;

use AlibabaCloud\Tea\Model;

class net extends Model
{
    /**
     * @var int
     */
    public $netDigSwitch;

    /**
     * @var string
     */
    public $netDnsNs;

    /**
     * @var string
     */
    public $netDnsQueryMethod;

    /**
     * @var int
     */
    public $netDnsServer;

    /**
     * @var int
     */
    public $netDnsSwitch;

    /**
     * @var int
     */
    public $netIcmpActive;

    /**
     * @var int
     */
    public $netIcmpDataCut;

    /**
     * @var int
     */
    public $netIcmpInterval;

    /**
     * @var int
     */
    public $netIcmpNum;

    /**
     * @var int
     */
    public $netIcmpSize;

    /**
     * @var int
     */
    public $netIcmpSwitch;

    /**
     * @var int
     */
    public $netIcmpTimeout;

    /**
     * @var int
     */
    public $netTraceRouteNum;

    /**
     * @var int
     */
    public $netTraceRouteSwitch;

    /**
     * @var int
     */
    public $netTraceRouteTimeout;

    /**
     * @var string
     */
    public $whiteList;
    protected $_name = [
        'netDigSwitch'         => 'NetDigSwitch',
        'netDnsNs'             => 'NetDnsNs',
        'netDnsQueryMethod'    => 'NetDnsQueryMethod',
        'netDnsServer'         => 'NetDnsServer',
        'netDnsSwitch'         => 'NetDnsSwitch',
        'netIcmpActive'        => 'NetIcmpActive',
        'netIcmpDataCut'       => 'NetIcmpDataCut',
        'netIcmpInterval'      => 'NetIcmpInterval',
        'netIcmpNum'           => 'NetIcmpNum',
        'netIcmpSize'          => 'NetIcmpSize',
        'netIcmpSwitch'        => 'NetIcmpSwitch',
        'netIcmpTimeout'       => 'NetIcmpTimeout',
        'netTraceRouteNum'     => 'NetTraceRouteNum',
        'netTraceRouteSwitch'  => 'NetTraceRouteSwitch',
        'netTraceRouteTimeout' => 'NetTraceRouteTimeout',
        'whiteList'            => 'WhiteList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->netDigSwitch) {
            $res['NetDigSwitch'] = $this->netDigSwitch;
        }
        if (null !== $this->netDnsNs) {
            $res['NetDnsNs'] = $this->netDnsNs;
        }
        if (null !== $this->netDnsQueryMethod) {
            $res['NetDnsQueryMethod'] = $this->netDnsQueryMethod;
        }
        if (null !== $this->netDnsServer) {
            $res['NetDnsServer'] = $this->netDnsServer;
        }
        if (null !== $this->netDnsSwitch) {
            $res['NetDnsSwitch'] = $this->netDnsSwitch;
        }
        if (null !== $this->netIcmpActive) {
            $res['NetIcmpActive'] = $this->netIcmpActive;
        }
        if (null !== $this->netIcmpDataCut) {
            $res['NetIcmpDataCut'] = $this->netIcmpDataCut;
        }
        if (null !== $this->netIcmpInterval) {
            $res['NetIcmpInterval'] = $this->netIcmpInterval;
        }
        if (null !== $this->netIcmpNum) {
            $res['NetIcmpNum'] = $this->netIcmpNum;
        }
        if (null !== $this->netIcmpSize) {
            $res['NetIcmpSize'] = $this->netIcmpSize;
        }
        if (null !== $this->netIcmpSwitch) {
            $res['NetIcmpSwitch'] = $this->netIcmpSwitch;
        }
        if (null !== $this->netIcmpTimeout) {
            $res['NetIcmpTimeout'] = $this->netIcmpTimeout;
        }
        if (null !== $this->netTraceRouteNum) {
            $res['NetTraceRouteNum'] = $this->netTraceRouteNum;
        }
        if (null !== $this->netTraceRouteSwitch) {
            $res['NetTraceRouteSwitch'] = $this->netTraceRouteSwitch;
        }
        if (null !== $this->netTraceRouteTimeout) {
            $res['NetTraceRouteTimeout'] = $this->netTraceRouteTimeout;
        }
        if (null !== $this->whiteList) {
            $res['WhiteList'] = $this->whiteList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return net
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetDigSwitch'])) {
            $model->netDigSwitch = $map['NetDigSwitch'];
        }
        if (isset($map['NetDnsNs'])) {
            $model->netDnsNs = $map['NetDnsNs'];
        }
        if (isset($map['NetDnsQueryMethod'])) {
            $model->netDnsQueryMethod = $map['NetDnsQueryMethod'];
        }
        if (isset($map['NetDnsServer'])) {
            $model->netDnsServer = $map['NetDnsServer'];
        }
        if (isset($map['NetDnsSwitch'])) {
            $model->netDnsSwitch = $map['NetDnsSwitch'];
        }
        if (isset($map['NetIcmpActive'])) {
            $model->netIcmpActive = $map['NetIcmpActive'];
        }
        if (isset($map['NetIcmpDataCut'])) {
            $model->netIcmpDataCut = $map['NetIcmpDataCut'];
        }
        if (isset($map['NetIcmpInterval'])) {
            $model->netIcmpInterval = $map['NetIcmpInterval'];
        }
        if (isset($map['NetIcmpNum'])) {
            $model->netIcmpNum = $map['NetIcmpNum'];
        }
        if (isset($map['NetIcmpSize'])) {
            $model->netIcmpSize = $map['NetIcmpSize'];
        }
        if (isset($map['NetIcmpSwitch'])) {
            $model->netIcmpSwitch = $map['NetIcmpSwitch'];
        }
        if (isset($map['NetIcmpTimeout'])) {
            $model->netIcmpTimeout = $map['NetIcmpTimeout'];
        }
        if (isset($map['NetTraceRouteNum'])) {
            $model->netTraceRouteNum = $map['NetTraceRouteNum'];
        }
        if (isset($map['NetTraceRouteSwitch'])) {
            $model->netTraceRouteSwitch = $map['NetTraceRouteSwitch'];
        }
        if (isset($map['NetTraceRouteTimeout'])) {
            $model->netTraceRouteTimeout = $map['NetTraceRouteTimeout'];
        }
        if (isset($map['WhiteList'])) {
            $model->whiteList = $map['WhiteList'];
        }

        return $model;
    }
}
