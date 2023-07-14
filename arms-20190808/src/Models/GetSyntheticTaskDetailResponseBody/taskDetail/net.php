<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail;

use AlibabaCloud\Tea\Model;

class net extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $netDigSwitch;

    /**
     * @example 189.12.32.124
     *
     * @var string
     */
    public $netDnsNs;

    /**
     * @example 1
     *
     * @var string
     */
    public $netDnsQueryMethod;

    /**
     * @example 0
     *
     * @var int
     */
    public $netDnsServer;

    /**
     * @example 0
     *
     * @var int
     */
    public $netDnsSwitch;

    /**
     * @example 10
     *
     * @var string
     */
    public $netDnsTimeout;

    /**
     * @example 0
     *
     * @var int
     */
    public $netIcmpActive;

    /**
     * @example 0
     *
     * @var int
     */
    public $netIcmpDataCut;

    /**
     * @example 10
     *
     * @var int
     */
    public $netIcmpInterval;

    /**
     * @example 10
     *
     * @var int
     */
    public $netIcmpNum;

    /**
     * @example 30
     *
     * @var int
     */
    public $netIcmpSize;

    /**
     * @example 0
     *
     * @var int
     */
    public $netIcmpSwitch;

    /**
     * @example 20
     *
     * @var int
     */
    public $netIcmpTimeout;

    /**
     * @example 30
     *
     * @var int
     */
    public $netTraceRouteNum;

    /**
     * @example 0
     *
     * @var int
     */
    public $netTraceRouteSwitch;

    /**
     * @example 20
     *
     * @var int
     */
    public $netTraceRouteTimeout;

    /**
     * @example 119.119.53.156/32
     *
     * @var string
     */
    public $whiteList;
    protected $_name = [
        'netDigSwitch'         => 'NetDigSwitch',
        'netDnsNs'             => 'NetDnsNs',
        'netDnsQueryMethod'    => 'NetDnsQueryMethod',
        'netDnsServer'         => 'NetDnsServer',
        'netDnsSwitch'         => 'NetDnsSwitch',
        'netDnsTimeout'        => 'NetDnsTimeout',
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
        if (null !== $this->netDnsTimeout) {
            $res['NetDnsTimeout'] = $this->netDnsTimeout;
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
        if (isset($map['NetDnsTimeout'])) {
            $model->netDnsTimeout = $map['NetDnsTimeout'];
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
