<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineMessageLogResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 100****2077
     *
     * @var string
     */
    public $acid;

    /**
     * @var string
     */
    public $content;

    /**
     * @example 1623738027480
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 11deca999****
     *
     * @var string
     */
    public $mid;

    /**
     * @example 1
     *
     * @var int
     */
    public $senderType;

    /**
     * @example 1623738026460
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
