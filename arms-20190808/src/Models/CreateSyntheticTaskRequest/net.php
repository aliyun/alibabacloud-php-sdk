<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest;

use AlibabaCloud\Tea\Model;

class net extends Model
{
    /**
     * @var string
     */
    public $netDNSNs;

    /**
     * @var int
     */
    public $netDNSQueryMethod;

    /**
     * @var int
     */
    public $netDNSServer;

    /**
     * @var int
     */
    public $netDNSSwitch;

    /**
     * @var int
     */
    public $netDNSTimeout;

    /**
     * @var int
     */
    public $netDigSwitch;

    /**
     * @var int
     */
    public $netICMPActive;

    /**
     * @var int
     */
    public $netICMPDataCut;

    /**
     * @var int
     */
    public $netICMPInterval;

    /**
     * @var int
     */
    public $netICMPNum;

    /**
     * @var int
     */
    public $netICMPSize;

    /**
     * @var int
     */
    public $netICMPSwitch;

    /**
     * @var int
     */
    public $netICMPTimeout;

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
        'netDNSNs'             => 'NetDNSNs',
        'netDNSQueryMethod'    => 'NetDNSQueryMethod',
        'netDNSServer'         => 'NetDNSServer',
        'netDNSSwitch'         => 'NetDNSSwitch',
        'netDNSTimeout'        => 'NetDNSTimeout',
        'netDigSwitch'         => 'NetDigSwitch',
        'netICMPActive'        => 'NetICMPActive',
        'netICMPDataCut'       => 'NetICMPDataCut',
        'netICMPInterval'      => 'NetICMPInterval',
        'netICMPNum'           => 'NetICMPNum',
        'netICMPSize'          => 'NetICMPSize',
        'netICMPSwitch'        => 'NetICMPSwitch',
        'netICMPTimeout'       => 'NetICMPTimeout',
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
