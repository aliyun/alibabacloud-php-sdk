<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\SDK\DAS\V20200116\Models\GetErrorRequestSampleResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetErrorRequestSampleResponseBody extends Model
{
    /**
     * @description The HTTP status code returned.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The returned data.
     *
     * @example [         {             "sqlId": "2cd4432556c3dab9d825ba363637****",             "database": "dbgateway",             "originHost": "172.16.1****",             "tables": [                 "meter_****"             ],             "instanceId": "rm-2ze8g2am97624****",             "errorCode": "1062",             "user": "dbgat****",             "sql": "insert into meter_****\n        ( \n        ****\n     )\n        values (now(), now(), \"bbbc8624-5e19-455a-9714-8466f688****\", \"2022-02-10 14:00:00\", \"{\"endTime\":\"2022-02-10 14:00:00\",\"endTimestamp\":1644472800,\"startTime\":\"2022-02-10 13:00:00\",\"startTimestamp\":1644469200}\", null, null)",             "timestamp": 1644476100435         }]
     *
     * @var data[]
     */
    public $data;

    /**
     * @description The returned message.
     *
     * >  If the request was successful, **Successful** is returned. If the request failed, an error message such as an error code is returned.
     * @example Successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 7172BECE-588A-5961-8126-C216E16B****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**
     *   **false**
     *
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
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return GetErrorRequestSampleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
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
