<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\GetModelStatusOutput;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $currentBytes;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var bool
     */
    public $finished;

    /**
     * @var int
     */
    public $finishedTime;

    /**
     * @var int
     */
    public $speed;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'currentBytes' => 'currentBytes',
        'errMessage' => 'errMessage',
        'fileSize' => 'fileSize',
        'finished' => 'finished',
        'finishedTime' => 'finishedTime',
        'speed' => 'speed',
        'startTime' => 'startTime',
        'total' => 'total',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentBytes) {
            $res['currentBytes'] = $this->currentBytes;
        }

        if (null !== $this->errMessage) {
            $res['errMessage'] = $this->errMessage;
        }

        if (null !== $this->fileSize) {
            $res['fileSize'] = $this->fileSize;
        }

        if (null !== $this->finished) {
            $res['finished'] = $this->finished;
        }

        if (null !== $this->finishedTime) {
            $res['finishedTime'] = $this->finishedTime;
        }

        if (null !== $this->speed) {
            $res['speed'] = $this->speed;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['currentBytes'])) {
            $model->currentBytes = $map['currentBytes'];
        }

        if (isset($map['errMessage'])) {
            $model->errMessage = $map['errMessage'];
        }

        if (isset($map['fileSize'])) {
            $model->fileSize = $map['fileSize'];
        }

        if (isset($map['finished'])) {
            $model->finished = $map['finished'];
        }

        if (isset($map['finishedTime'])) {
            $model->finishedTime = $map['finishedTime'];
        }

        if (isset($map['speed'])) {
            $model->speed = $map['speed'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
