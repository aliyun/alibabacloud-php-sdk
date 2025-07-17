<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest;

use AlibabaCloud\Tea\Model;

class net extends Model
{
    /**
     * @description The DNS server.
     *
     * @example 114.114.XX.XX
     *
     * @var string
     */
    public $netDNSNs;

    /**
     * @description The DNS query method. Valid values:
     *
     *   1: recursion
     *   2: iteration
     *
     * @example 1
     *
     * @var int
     */
    public $netDNSQueryMethod;

    /**
     * @description The IP address type of the DNS server.
     *
     *   0: IPv4
     *   1: IPv6
     *   2: an automatic IP address
     *
     * @example 0
     *
     * @var int
     */
    public $netDNSServer;

    /**
     * @description Specifies whether to enable domain name system (DNS) monitoring.
     *
     *   0: Off.
     *   1: On. You must set DNS parameters if you want to enable DNS monitoring.
     *
     * @example 1
     *
     * @var int
     */
    public $netDNSSwitch;

    /**
     * @description The timeout period of DNS monitoring. Default value: 5 seconds. Valid values: 0 to 45 seconds.
     *
     * @example 5
     *
     * @var int
     */
    public $netDNSTimeout;

    /**
     * @description Specifies whether to display the data in the DIG format. Valid values:
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
     * @description The protocol type. Valid values:
     *
     *   0: ICMP
     *   1: TCP
     *
     * @example 0
     *
     * @var int
     */
    public $netICMPActive;

    /**
     * @description Specifies whether to split packages.
     *
     *   0: no
     *   1: yes
     *
     * @example 0
     *
     * @var int
     */
    public $netICMPDataCut;

    /**
     * @description The interval at which the network synthetic monitoring task is executed. Unit: seconds.
     *
     * @example 1
     *
     * @var int
     */
    public $netICMPInterval;

    /**
     * @description The number of packages.
     *
     * @example 4
     *
     * @var int
     */
    public $netICMPNum;

    /**
     * @description The package size.
     *
     * @example 32
     *
     * @var int
     */
    public $netICMPSize;

    /**
     * @description Specifies whether to enable ping monitoring.
     *
     *   0: Off.
     *   1: On. You must set Internet control message protocol (ICMP) parameters if you want to enable ping monitoring.
     *
     * @example 1
     *
     * @var int
     */
    public $netICMPSwitch;

    /**
     * @description The timeout period of Ping monitoring.
     *
     * @example 20
     *
     * @var int
     */
    public $netICMPTimeout;

    /**
     * @description The maximum number of active monitoring points.
     *
     * @example 20
     *
     * @var int
     */
    public $netTraceRouteNum;

    /**
     * @description Specifies whether to enable tracert monitoring.
     *
     *   0: Off.
     *   1: On. You must set the tracert parameters if you want to enable tracert monitoring.
     *
     * @example 1
     *
     * @var int
     */
    public $netTraceRouteSwitch;

    /**
     * @description The timeout period of tracert monitoring. Valid values: 0 to 300 seconds.
     *
     * @example 60
     *
     * @var int
     */
    public $netTraceRouteTimeout;

    /**
     * @description The whitelist for DNS hijacking. The format is `Domain name: Matching rule`.
     *
     * >  Wireless application protocol (WAP) networks do not support DNS hijacking.
     *
     * @example www.aliyun.com:202.0.3.55|203.3.44.67
     *
     * @var string
     */
    public $whiteList;
    protected $_name = [
        'netDNSNs' => 'NetDNSNs',
        'netDNSQueryMethod' => 'NetDNSQueryMethod',
        'netDNSServer' => 'NetDNSServer',
        'netDNSSwitch' => 'NetDNSSwitch',
        'netDNSTimeout' => 'NetDNSTimeout',
        'netDigSwitch' => 'NetDigSwitch',
        'netICMPActive' => 'NetICMPActive',
        'netICMPDataCut' => 'NetICMPDataCut',
        'netICMPInterval' => 'NetICMPInterval',
        'netICMPNum' => 'NetICMPNum',
        'netICMPSize' => 'NetICMPSize',
        'netICMPSwitch' => 'NetICMPSwitch',
        'netICMPTimeout' => 'NetICMPTimeout',
        'netTraceRouteNum' => 'NetTraceRouteNum',
        'netTraceRouteSwitch' => 'NetTraceRouteSwitch',
        'netTraceRouteTimeout' => 'NetTraceRouteTimeout',
        'whiteList' => 'WhiteList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->netDNSNs) {
            $res['NetDNSNs'] = $this->netDNSNs;
        }
        if (null !== $this->netDNSQueryMethod) {
            $res['NetDNSQueryMethod'] = $this->netDNSQueryMethod;
        }
        if (null !== $this->netDNSServer) {
            $res['NetDNSServer'] = $this->netDNSServer;
        }
        if (null !== $this->netDNSSwitch) {
            $res['NetDNSSwitch'] = $this->netDNSSwitch;
        }
        if (null !== $this->netDNSTimeout) {
            $res['NetDNSTimeout'] = $this->netDNSTimeout;
        }
        if (null !== $this->netDigSwitch) {
            $res['NetDigSwitch'] = $this->netDigSwitch;
        }
        if (null !== $this->netICMPActive) {
            $res['NetICMPActive'] = $this->netICMPActive;
        }
        if (null !== $this->netICMPDataCut) {
            $res['NetICMPDataCut'] = $this->netICMPDataCut;
        }
        if (null !== $this->netICMPInterval) {
            $res['NetICMPInterval'] = $this->netICMPInterval;
        }
        if (null !== $this->netICMPNum) {
            $res['NetICMPNum'] = $this->netICMPNum;
        }
        if (null !== $this->netICMPSize) {
            $res['NetICMPSize'] = $this->netICMPSize;
        }
        if (null !== $this->netICMPSwitch) {
            $res['NetICMPSwitch'] = $this->netICMPSwitch;
        }
        if (null !== $this->netICMPTimeout) {
            $res['NetICMPTimeout'] = $this->netICMPTimeout;
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
        if (isset($map['NetDNSNs'])) {
            $model->netDNSNs = $map['NetDNSNs'];
        }
        if (isset($map['NetDNSQueryMethod'])) {
            $model->netDNSQueryMethod = $map['NetDNSQueryMethod'];
        }
        if (isset($map['NetDNSServer'])) {
            $model->netDNSServer = $map['NetDNSServer'];
        }
        if (isset($map['NetDNSSwitch'])) {
            $model->netDNSSwitch = $map['NetDNSSwitch'];
        }
        if (isset($map['NetDNSTimeout'])) {
            $model->netDNSTimeout = $map['NetDNSTimeout'];
        }
        if (isset($map['NetDigSwitch'])) {
            $model->netDigSwitch = $map['NetDigSwitch'];
        }
        if (isset($map['NetICMPActive'])) {
            $model->netICMPActive = $map['NetICMPActive'];
        }
        if (isset($map['NetICMPDataCut'])) {
            $model->netICMPDataCut = $map['NetICMPDataCut'];
        }
        if (isset($map['NetICMPInterval'])) {
            $model->netICMPInterval = $map['NetICMPInterval'];
        }
        if (isset($map['NetICMPNum'])) {
            $model->netICMPNum = $map['NetICMPNum'];
        }
        if (isset($map['NetICMPSize'])) {
            $model->netICMPSize = $map['NetICMPSize'];
        }
        if (isset($map['NetICMPSwitch'])) {
            $model->netICMPSwitch = $map['NetICMPSwitch'];
        }
        if (isset($map['NetICMPTimeout'])) {
            $model->netICMPTimeout = $map['NetICMPTimeout'];
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
