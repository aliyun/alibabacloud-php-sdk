<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail;

use AlibabaCloud\Tea\Model;

class net extends Model
{
    /**
     * @description Indicates whether the data is displayed in the DIG format. Valid values:
     *
     *   0: no
     *   1: yes
     *
     * @example 0
     *
     * @var int
     */
    public $netDigSwitch;

    /**
     * @description The NS server.
     *
     * @example 189.12.32.124
     *
     * @var string
     */
    public $netDnsNs;

    /**
     * @description The DNS query method. Valid values:
     *
     *   1: recursive
     *   2: iterative
     *
     * @example 1
     *
     * @var string
     */
    public $netDnsQueryMethod;

    /**
     * @description The type of the DNS server. Valid values:
     *
     *   0: ipv4
     *   1: ipv6
     *   2: A version is automatically selected.
     *
     * @example 0
     *
     * @var int
     */
    public $netDnsServer;

    /**
     * @description Indicates whether DNS test is enabled. Valid values:
     *
     *   0: no
     *   1: yes
     *
     * @example 0
     *
     * @var int
     */
    public $netDnsSwitch;

    /**
     * @description The timeout period of DNS requests.
     *
     * @example 10
     *
     * @var string
     */
    public $netDnsTimeout;

    /**
     * @description The protocol type. Valid values:
     *
     *   0 : ICMP
     *   1 : TCP
     *
     * @example 0
     *
     * @var int
     */
    public $netIcmpActive;

    /**
     * @description Indicates whether packets are split. Valid values:
     *
     *   0: no
     *   1: yes
     *
     * @example 0
     *
     * @var int
     */
    public $netIcmpDataCut;

    /**
     * @description The interval at which the synthetic monitoring task is executed.
     *
     * @example 10
     *
     * @var int
     */
    public $netIcmpInterval;

    /**
     * @description The number of packets.
     *
     * @example 10
     *
     * @var int
     */
    public $netIcmpNum;

    /**
     * @description The packet size.
     *
     * @example 30
     *
     * @var int
     */
    public $netIcmpSize;

    /**
     * @description Indicates whether ICMP test is enabled. Valid values:
     *
     *   0: no.
     *   1: yes. If you set this parameter to 1, you must also set the Icmp parameter.
     *
     * @example 0
     *
     * @var int
     */
    public $netIcmpSwitch;

    /**
     * @description The monitoring timeout period.
     *
     * @example 20
     *
     * @var int
     */
    public $netIcmpTimeout;

    /**
     * @description The maximum number of active detection points.
     *
     * @example 30
     *
     * @var int
     */
    public $netTraceRouteNum;

    /**
     * @description Indicates whether Tracert test is enabled. Valid values:
     *
     *   0: no
     *   1: yes. If you set this parameter to 1, you must also set the Tracert parameter.
     *
     * @example 0
     *
     * @var int
     */
    public $netTraceRouteSwitch;

    /**
     * @description The monitoring timeout period. Valid values: 0 to 300. Unit: seconds.
     *
     * @example 20
     *
     * @var int
     */
    public $netTraceRouteTimeout;

    /**
     * @description The whitelisted objects that are used to avoid DNS hijacking. Format: `<domain name>:<objects>`.
     *
     * >  WAP networks do not support hijacking.
     *
     * @example 119.119.53.156/32
     *
     * @var string
     */
    public $whiteList;
    protected $_name = [
        'netDigSwitch' => 'NetDigSwitch',
        'netDnsNs' => 'NetDnsNs',
        'netDnsQueryMethod' => 'NetDnsQueryMethod',
        'netDnsServer' => 'NetDnsServer',
        'netDnsSwitch' => 'NetDnsSwitch',
        'netDnsTimeout' => 'NetDnsTimeout',
        'netIcmpActive' => 'NetIcmpActive',
        'netIcmpDataCut' => 'NetIcmpDataCut',
        'netIcmpInterval' => 'NetIcmpInterval',
        'netIcmpNum' => 'NetIcmpNum',
        'netIcmpSize' => 'NetIcmpSize',
        'netIcmpSwitch' => 'NetIcmpSwitch',
        'netIcmpTimeout' => 'NetIcmpTimeout',
        'netTraceRouteNum' => 'NetTraceRouteNum',
        'netTraceRouteSwitch' => 'NetTraceRouteSwitch',
        'netTraceRouteTimeout' => 'NetTraceRouteTimeout',
        'whiteList' => 'WhiteList',
    ];

    public function validate() {}

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
