<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineMessageLogResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $acid;
    /**
     * @var string
     */
    public $content;
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var string
     */
    public $mid;
    /**
     * @var int
     */
    public $senderType;
    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'acid'       => 'Acid',
        'content'    => 'Content',
        'endTime'    => 'EndTime',
        'mid'        => 'Mid',
        'senderType' => 'SenderType',
        'startTime'  => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acid) {
            $res['Acid'] = $this->acid;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->mid) {
            $res['Mid'] = $this->mid;
        }

        if (null !== $this->senderType) {
            $res['SenderType'] = $this->senderType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['Acid'])) {
            $model->acid = $map['Acid'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Mid'])) {
            $model->mid = $map['Mid'];
        }

        if (isset($map['SenderType'])) {
            $model->senderType = $map['SenderType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
