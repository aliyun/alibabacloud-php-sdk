<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\SmsUpRequest;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description 发送内容。
     *
     * @example 内容
     *
     * @var string
     */
    public $content;

    /**
     * @description 上行短信扩展号码，系统后台自动生成，不支持自定义传入。
     *
     * @example 1234
     *
     * @var string
     */
    public $destCode;

    /**
     * @description 手机号码。
     *
     * @example 1390000****
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description 发送时间。
     *
     * @example 2017-09-01 00:00:00
     *
     * @var string
     */
    public $sendTime;

    /**
     * @description 序列号。
     *
     * @example 1234567890
     *
     * @var int
     */
    public $sequenceId;

    /**
     * @description 签名信息。
     *
     * @example 签名
     *
     * @var string
     */
    public $signName;
    protected $_name = [
        'content'     => 'content',
        'destCode'    => 'dest_code',
        'phoneNumber' => 'phone_number',
        'sendTime'    => 'send_time',
        'sequenceId'  => 'sequence_id',
        'signName'    => 'sign_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->destCode) {
            $res['dest_code'] = $this->destCode;
        }
        if (null !== $this->phoneNumber) {
            $res['phone_number'] = $this->phoneNumber;
        }
        if (null !== $this->sendTime) {
            $res['send_time'] = $this->sendTime;
        }
        if (null !== $this->sequenceId) {
            $res['sequence_id'] = $this->sequenceId;
        }
        if (null !== $this->signName) {
            $res['sign_name'] = $this->signName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['dest_code'])) {
            $model->destCode = $map['dest_code'];
        }
        if (isset($map['phone_number'])) {
            $model->phoneNumber = $map['phone_number'];
        }
        if (isset($map['send_time'])) {
            $model->sendTime = $map['send_time'];
        }
        if (isset($map['sequence_id'])) {
            $model->sequenceId = $map['sequence_id'];
        }
        if (isset($map['sign_name'])) {
            $model->signName = $map['sign_name'];
        }

        return $model;
    }
}
