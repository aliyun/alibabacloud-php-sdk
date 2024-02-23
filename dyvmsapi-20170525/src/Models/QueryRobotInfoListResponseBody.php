<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QueryRobotInfoListResponseBody extends Model
{
    /**
     * @description The response code.
     *
     *   The value OK indicates that the request was successful.
     *   For more information about other response codes, see [API error codes](~~112502~~).
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The basic information about the robot, in the JSON format. The basic information contains the following parameters:
     *
     *   **id**: the robot ID.
     *   **robotName**: the robot name.
     *   **robotType**: the robot type.
     *   **auditStatus**: the review state.
     *   **gmtCreate**: the time when the task was created.
     *   **gmtModified**: the time when the task was modified.
     *   **partnerId**: the partner ID.
     *   **asrId**: the ID of the automatic speech recognition (ASR) model.
     *   **asrType**: the ASR type. Valid values: **Public** and **Private**.
     *   **remark**: the additional information.
     *
     * @example {["id":1000010920004, "gmtModified":"Thu Mar 21 15:38:55 CST 2019", "auditStatus":"AUDITPASS","gmtCreate":"Thu Mar 21 12:00:51 CST 2019","remark":"tset","partnerId":100000022670001,"asrId":"a9a1d69081fd4266ad788346bf5e1b6c","robotType":"CUSTOM","asrType":"1","robotName":"Collection scenario"},{"id":1000010920003,"gmtModified":"Thu Mar 21 11:51:10 CST 2019","auditStatus":"AUDITPASS","gmtCreate":"Thu Mar 21 11:44:57 CST 2019","remark":"test","partnerId":100000022670001,"asrId":"a9a1d69081fd4266ad788346bf5e1b6c","robotType":"CUSTOM","asrType":"1","robotName":"Collection scenario"]}
     *
     * @var string
     */
    public $data;

    /**
     * @description The returned message.
     *
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example F59AF338-655D-48E8-9471-5EB07692B1CC
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
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
            $res['Data'] = $this->data;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRobotInfoListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
