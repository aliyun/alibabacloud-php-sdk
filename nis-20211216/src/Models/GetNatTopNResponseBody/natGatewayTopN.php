<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\GetNatTopNResponseBody;

use AlibabaCloud\Tea\Model;

class natGatewayTopN extends Model
{
    /**
     * @description The number of concurrent connections. Unit: connections.
     *
     * @example 8
     *
     * @var float
     */
    public $activeSessionCount;

    /**
     * @description The inbound data transfer. Unit: bit/s.
     *
     * @example 100
     *
     * @var float
     */
    public $inBps;

    /**
     * @description This field is reserved and not in use.
     *
     * @example 10
     *
     * @var float
     */
    public $inFlowPerMinute;

    /**
     * @description The inbound packet forwarding rate. Unit: packets per second.
     *
     * @example 10
     *
     * @var float
     */
    public $inPps;

    /**
     * @description The IP address.
     *
     * @example 192.168.156.101
     *
     * @var string
     */
    public $ip;

    /**
     * @description The new connection creation rate. Unit: connections per second.
     *
     * @example 2
     *
     * @var float
     */
    public $newSessionPerSecond;

    /**
     * @description The outbound data transfer. Unit: bit/s.
     *
     * @example 200
     *
     * @var float
     */
    public $outBps;

    /**
     * @description This field is reserved and not in use.
     *
     * @example 10
     *
     * @var float
     */
    public $outFlowPerMinute;

    /**
     * @description The outbound packet forwarding rate. Unit: packets per second.
     *
     * @example 20
     *
     * @var float
     */
    public $outPps;
    protected $_name = [
        'activeSessionCount'  => 'ActiveSessionCount',
        'inBps'               => 'InBps',
        'inFlowPerMinute'     => 'InFlowPerMinute',
        'inPps'               => 'InPps',
        'ip'                  => 'Ip',
        'newSessionPerSecond' => 'NewSessionPerSecond',
        'outBps'              => 'OutBps',
        'outFlowPerMinute'    => 'OutFlowPerMinute',
        'outPps'              => 'OutPps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeSessionCount) {
            $res['ActiveSessionCount'] = $this->activeSessionCount;
        }
        if (null !== $this->inBps) {
            $res['InBps'] = $this->inBps;
        }
        if (null !== $this->inFlowPerMinute) {
            $res['InFlowPerMinute'] = $this->inFlowPerMinute;
        }
        if (null !== $this->inPps) {
            $res['InPps'] = $this->inPps;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->newSessionPerSecond) {
            $res['NewSessionPerSecond'] = $this->newSessionPerSecond;
        }
        if (null !== $this->outBps) {
            $res['OutBps'] = $this->outBps;
        }
        if (null !== $this->outFlowPerMinute) {
            $res['OutFlowPerMinute'] = $this->outFlowPerMinute;
        }
        if (null !== $this->outPps) {
            $res['OutPps'] = $this->outPps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return natGatewayTopN
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveSessionCount'])) {
            $model->activeSessionCount = $map['ActiveSessionCount'];
        }
        if (isset($map['InBps'])) {
            $model->inBps = $map['InBps'];
        }
        if (isset($map['InFlowPerMinute'])) {
            $model->inFlowPerMinute = $map['InFlowPerMinute'];
        }
        if (isset($map['InPps'])) {
            $model->inPps = $map['InPps'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['NewSessionPerSecond'])) {
            $model->newSessionPerSecond = $map['NewSessionPerSecond'];
        }
        if (isset($map['OutBps'])) {
            $model->outBps = $map['OutBps'];
        }
        if (isset($map['OutFlowPerMinute'])) {
            $model->outFlowPerMinute = $map['OutFlowPerMinute'];
        }
        if (isset($map['OutPps'])) {
            $model->outPps = $map['OutPps'];
        }

        return $model;
    }
}
