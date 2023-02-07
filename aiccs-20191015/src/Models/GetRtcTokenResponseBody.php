<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetRtcTokenResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetRtcTokenResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example {"cleansession":true,"clientId":"GID_VOIP@@@ClientId_2000000001271771_100685295007","conferenceTopic":"cs_alicom_voip_conference_pre","dataTopic":"alicom_voip_data_pre","host":"mqtt-cn-4590mdhb901.mqtt.aliyuncs.com","meetingEventKeepAliveInterval":0,"phoneTopic":"alicom_voip_phone","port":0,"reconnectTimeout":2000,"registerTime":0,"sdkClientPort":8883,"serverId":"GID_VOIP@@@MTEuMjIuMTQ1Ljgy","sgwServerTopic":"alicom_voip_server_pre","tlsport":443,"tokenData":"LzMT+XLFl5s/YWJ/MlDz4t/Lq5HC1iGU1P28HAMaxYzmBSHQsWXgdISJ1ZJ+2cxaU0jwYsoyG8Q8cCIbLZTwwaFHf7gc7pPXbJGYgJWUr5ooKsoHaVvvG34cww7W8woWE1OsmZGFDODvooOIjF1CZSorVrR8OwRdprW99yqhMhkJKh7r5f3HfiQgoJWL8b3A85RrRGCSP057skgQ5rIqVAlx7jDFrOTdLtz+krken8qYvpaVBO9wRfFyWQLvxAgNJNx3Oql/hpzc2o3+xbKGTA/P2siLn6Nee1FYk5ClpXcnvfSTM4BAauuWR+oES10VblKEKTU5R/pfjXj3UKOlZ1+OdGO93WA16BR/l1uRb3cOLqya5pjWM+oSmo0sOR7B0ATLz6K1xA0Pc+p6Mu8hZl+OdGO93WA1kj1L0h9Z6CAZG4ol/BNdIg9z6noy7yFmX450Y73dYDWSPUvSH1noIBkbiiX8E10iT0a6ypXxupQdyyrhh8j1yw6otqnw5AT5Tj5VsVWVfflXeZ8nPt1ydXC9nWeHX7K80O6vtOU9M8Qn5VrhkP0F1umbOoYs3NfM+WYZIQx4pkViQo6qqkxgbEg1l6oHJbmOVzrxYRrDTIxqgE/pb0YVJQ==","useTLS":false,"username":"LTAI27GqAW1VrcQA"}
     *
     * @var data
     */
    public $data;

    /**
     * @example Successful
     *
     * @var string
     */
    public $message;

    /**
     * @example EE338D98-9BD3-4413-B165
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRtcTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
