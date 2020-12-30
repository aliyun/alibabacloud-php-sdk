<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\networkStats;

use AlibabaCloud\Tea\Model;

class tcp extends Model
{
    /**
     * @var int
     */
    public $closeWait;

    /**
     * @var int
     */
    public $finWait2;

    /**
     * @var int
     */
    public $lastAck;

    /**
     * @var int
     */
    public $closing;

    /**
     * @var int
     */
    public $listen;

    /**
     * @var int
     */
    public $timeWait;

    /**
     * @var int
     */
    public $established;

    /**
     * @var int
     */
    public $finWait1;

    /**
     * @var int
     */
    public $close;

    /**
     * @var int
     */
    public $synRecv;

    /**
     * @var int
     */
    public $synSent;
    protected $_name = [
        'closeWait'   => 'CloseWait',
        'finWait2'    => 'FinWait2',
        'lastAck'     => 'LastAck',
        'closing'     => 'Closing',
        'listen'      => 'Listen',
        'timeWait'    => 'TimeWait',
        'established' => 'Established',
        'finWait1'    => 'FinWait1',
        'close'       => 'Close',
        'synRecv'     => 'SynRecv',
        'synSent'     => 'SynSent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->closeWait) {
            $res['CloseWait'] = $this->closeWait;
        }
        if (null !== $this->finWait2) {
            $res['FinWait2'] = $this->finWait2;
        }
        if (null !== $this->lastAck) {
            $res['LastAck'] = $this->lastAck;
        }
        if (null !== $this->closing) {
            $res['Closing'] = $this->closing;
        }
        if (null !== $this->listen) {
            $res['Listen'] = $this->listen;
        }
        if (null !== $this->timeWait) {
            $res['TimeWait'] = $this->timeWait;
        }
        if (null !== $this->established) {
            $res['Established'] = $this->established;
        }
        if (null !== $this->finWait1) {
            $res['FinWait1'] = $this->finWait1;
        }
        if (null !== $this->close) {
            $res['Close'] = $this->close;
        }
        if (null !== $this->synRecv) {
            $res['SynRecv'] = $this->synRecv;
        }
        if (null !== $this->synSent) {
            $res['SynSent'] = $this->synSent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tcp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloseWait'])) {
            $model->closeWait = $map['CloseWait'];
        }
        if (isset($map['FinWait2'])) {
            $model->finWait2 = $map['FinWait2'];
        }
        if (isset($map['LastAck'])) {
            $model->lastAck = $map['LastAck'];
        }
        if (isset($map['Closing'])) {
            $model->closing = $map['Closing'];
        }
        if (isset($map['Listen'])) {
            $model->listen = $map['Listen'];
        }
        if (isset($map['TimeWait'])) {
            $model->timeWait = $map['TimeWait'];
        }
        if (isset($map['Established'])) {
            $model->established = $map['Established'];
        }
        if (isset($map['FinWait1'])) {
            $model->finWait1 = $map['FinWait1'];
        }
        if (isset($map['Close'])) {
            $model->close = $map['Close'];
        }
        if (isset($map['SynRecv'])) {
            $model->synRecv = $map['SynRecv'];
        }
        if (isset($map['SynSent'])) {
            $model->synSent = $map['SynSent'];
        }

        return $model;
    }
}
