<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QueryCallDetailByTaskIdResponseBody extends Model
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
     * @description The call details of the outbound robocall task, in the JSON format.
     *
     *   **startDate**: the time when the call was answered.
     *
     *   **stateDesc**: the reason why the call was hung up. If the status code of early media was returned, this parameter indicates the reason why the status code of early media was used.
     *
     *   **statusCode**: the status code.
     *
     *   **EndDate**: the time when the call was ended.
     *
     *   **calleeShowNumber**: the calling number displayed to the called party.
     *
     *   **callee**: the called number.
     *
     *   **duration**: the billing duration.
     *
     *   **gmtCreate**: the time when the outbound robocall task was created.
     *
     *   **hangupDirection**: the party who hung up.
     *
     *   **tags**: the call tags.
     *
     *   **dialogCount**: the number of conversation rounds in the call.
     *
     *   **sureCount**: the number of times that the robocall task was acknowledged.
     *
     *   **denyCount**: the number of times that the robocall task was denied.
     *
     *   **rejectCount**: the number of times that the robocall task was rejected.
     *
     *   **customCount**: the number of times that the robocall task was customized.
     *
     *   **knowledgeCount**: the number of times that the knowledge base was queried.
     *
     *   **recordFile**: the download URL of the recording file. The URL is valid only for 48 hours. The recording file must be downloaded in time.
     *
     *   **callId**: the call ID.
     *
     *   **recordStatus**: indicates whether a recording file was available. Valid values:
     *
     *   1: A recording file was available.
     *   2: No recording file was available.
     *
     *   **knowledgeCommonCount**: the number of call failures caused by the common issues in the knowledge base.
     *
     *   **knowledgeBusinessCount**: the number of call failures caused by the business issues in the knowledge base.
     *
     *   **callee**: the called number.
     *
     *   **dialogDetail**: the conversation details. The value is a JSON array that contains the following parameters:
     *
     *   **role**: the role who spoke.
     *   **content**: the content of the speech.
     *   **time**: the start time of the speech.
     *
     * > The preceding parameters are for reference only. The actually returned parameters prevail.
     * @example {"rejectCount":0,"dialogCount":3,"tags":"","startDate":"2019-03-27 10:34:54","gmtCreate":"2019-03-27 10:34:40","sureCount":0,"state":"200000","recordFile":"http://alicom-fc-record-biz.cn-hangzhou.oss.aliyun-inc.com/Freeswitch_RU_115987800002_02c3554f-ea24-422d-b1de-e671f455f21a_record.wav?OSSAccessKeyId=bypFNbGJVk73****&Signature=VWHOX%2FFhvvtSkxfMTw%2F5fdJUQuk%3D&Expires=1554382725","defaultCount":0,"endDate":"2019-03-27 10:35:09","calleeShowNumber":"1390000****","customCount":0,"callId":"1390000****","knowledgeCount":0,"recordStatus":1,"denyCount":0,"duration":16,"knowledgeCommonCount":0,"callee":"1390000****","knowledgeBusinessCount":0,"hangupDirection":1}
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
     * @example D86B61A8-F2EE-4E4C-9F05-08A4676FFD89
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
     * @return QueryCallDetailByTaskIdResponseBody
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
