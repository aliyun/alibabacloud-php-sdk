<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models;

use AlibabaCloud\Tea\Model;

class ManualCallbackRequest extends Model
{
    /**
     * @var string
     */
    public $channel;

    /**
     * @example abc
     *
     * @var string
     */
    public $checksum;

    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example {\\"Result\\": [{\\"Confidence\\": 100.0, \\"CustomizedHit\\": [{\\"KeyWords\\": u\\"\\u4fdd\\u969c,\\u6700\\u5927,\\u9ad8\\u7ea7\\", \\"LibName\\": u\\"\\u4f18\\u8def\\u654f\\u611f\\u8bcd\\"}], \\"Label\\": \\"customized\\"}]}
     *
     * @var string
     */
    public $data;

    /**
     * @example OK
     *
     * @var string
     */
    public $msg;

    /**
     * @example B0963D30-BAB4-562F-9ED0-7A23AEC51C7C
     *
     * @var string
     */
    public $reqId;
    protected $_name = [
        'channel' => 'Channel',
        'checksum' => 'Checksum',
        'code' => 'Code',
        'data' => 'Data',
        'msg' => 'Msg',
        'reqId' => 'ReqId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->checksum) {
            $res['Checksum'] = $this->checksum;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->reqId) {
            $res['ReqId'] = $this->reqId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ManualCallbackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['Checksum'])) {
            $model->checksum = $map['Checksum'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['ReqId'])) {
            $model->reqId = $map['ReqId'];
        }

        return $model;
    }
}
