<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class EticketInfo extends Model
{
    /**
     * @var int
     */
    public $availableNum;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $codeStatus;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $lockNum;

    /**
     * @var string
     */
    public $qrcodeUrl;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $useTime;

    /**
     * @var int
     */
    public $usedNum;
    protected $_name = [
        'availableNum' => 'availableNum',
        'code' => 'code',
        'codeStatus' => 'codeStatus',
        'endTime' => 'endTime',
        'lockNum' => 'lockNum',
        'qrcodeUrl' => 'qrcodeUrl',
        'startTime' => 'startTime',
        'useTime' => 'useTime',
        'usedNum' => 'usedNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableNum) {
            $res['availableNum'] = $this->availableNum;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->codeStatus) {
            $res['codeStatus'] = $this->codeStatus;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->lockNum) {
            $res['lockNum'] = $this->lockNum;
        }

        if (null !== $this->qrcodeUrl) {
            $res['qrcodeUrl'] = $this->qrcodeUrl;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->useTime) {
            $res['useTime'] = $this->useTime;
        }

        if (null !== $this->usedNum) {
            $res['usedNum'] = $this->usedNum;
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
        if (isset($map['availableNum'])) {
            $model->availableNum = $map['availableNum'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['codeStatus'])) {
            $model->codeStatus = $map['codeStatus'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['lockNum'])) {
            $model->lockNum = $map['lockNum'];
        }

        if (isset($map['qrcodeUrl'])) {
            $model->qrcodeUrl = $map['qrcodeUrl'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['useTime'])) {
            $model->useTime = $map['useTime'];
        }

        if (isset($map['usedNum'])) {
            $model->usedNum = $map['usedNum'];
        }

        return $model;
    }
}
