<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineMessageLogResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 会话ID
     *
     * @var string
     */
    public $acid;

    /**
     * @description 发送方类型（1：会员，2：坐席）
     *
     * @var int
     */
    public $senderType;

    /**
     * @description 开始时间
     *
     * @var int
     */
    public $startTime;

    /**
     * @description 结束时间
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 记录id
     *
     * @var string
     */
    public $mid;

    /**
     * @description 会话内容
     *
     * @var string
     */
    public $content;
    protected $_name = [
        'acid'       => 'Acid',
        'senderType' => 'SenderType',
        'startTime'  => 'StartTime',
        'endTime'    => 'EndTime',
        'mid'        => 'Mid',
        'content'    => 'Content',
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
        if (null !== $this->senderType) {
            $res['SenderType'] = $this->senderType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->mid) {
            $res['Mid'] = $this->mid;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
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
        if (isset($map['SenderType'])) {
            $model->senderType = $map['SenderType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Mid'])) {
            $model->mid = $map['Mid'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
