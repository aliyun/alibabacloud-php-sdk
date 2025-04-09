<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobGroupResponseBody\jobGroup;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $clientHangupNum;

    /**
     * @var int
     */
    public $finishedNum;

    /**
     * @var int
     */
    public $noInteractNum;

    /**
     * @var int
     */
    public $timeoutHangupNum;

    /**
     * @var int
     */
    public $unrecognizedNum;
    protected $_name = [
        'clientHangupNum' => 'ClientHangupNum',
        'finishedNum' => 'FinishedNum',
        'noInteractNum' => 'NoInteractNum',
        'timeoutHangupNum' => 'TimeoutHangupNum',
        'unrecognizedNum' => 'UnrecognizedNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientHangupNum) {
            $res['ClientHangupNum'] = $this->clientHangupNum;
        }

        if (null !== $this->finishedNum) {
            $res['FinishedNum'] = $this->finishedNum;
        }

        if (null !== $this->noInteractNum) {
            $res['NoInteractNum'] = $this->noInteractNum;
        }

        if (null !== $this->timeoutHangupNum) {
            $res['TimeoutHangupNum'] = $this->timeoutHangupNum;
        }

        if (null !== $this->unrecognizedNum) {
            $res['UnrecognizedNum'] = $this->unrecognizedNum;
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
        if (isset($map['ClientHangupNum'])) {
            $model->clientHangupNum = $map['ClientHangupNum'];
        }

        if (isset($map['FinishedNum'])) {
            $model->finishedNum = $map['FinishedNum'];
        }

        if (isset($map['NoInteractNum'])) {
            $model->noInteractNum = $map['NoInteractNum'];
        }

        if (isset($map['TimeoutHangupNum'])) {
            $model->timeoutHangupNum = $map['TimeoutHangupNum'];
        }

        if (isset($map['UnrecognizedNum'])) {
            $model->unrecognizedNum = $map['UnrecognizedNum'];
        }

        return $model;
    }
}
