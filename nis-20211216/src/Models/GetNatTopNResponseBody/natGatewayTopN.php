<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\GetNatTopNResponseBody;

use AlibabaCloud\Dara\Model;

class natGatewayTopN extends Model
{
    /**
     * @var float
     */
    public $activeSessionCount;

    /**
     * @var float
     */
    public $inBps;

    /**
     * @var float
     */
    public $inFlowPerMinute;

    /**
     * @var float
     */
    public $inPps;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var float
     */
    public $newSessionPerSecond;

    /**
     * @var float
     */
    public $outBps;

    /**
     * @var float
     */
    public $outFlowPerMinute;

    /**
     * @var float
     */
    public $outPps;
    protected $_name = [
        'activeSessionCount' => 'ActiveSessionCount',
        'inBps' => 'InBps',
        'inFlowPerMinute' => 'InFlowPerMinute',
        'inPps' => 'InPps',
        'ip' => 'Ip',
        'newSessionPerSecond' => 'NewSessionPerSecond',
        'outBps' => 'OutBps',
        'outFlowPerMinute' => 'OutFlowPerMinute',
        'outPps' => 'OutPps',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
