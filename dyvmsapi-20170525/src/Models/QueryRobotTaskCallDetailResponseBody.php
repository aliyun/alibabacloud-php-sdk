<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QueryRobotTaskCallDetailResponseBody extends Model
{
    /**
     * @description The response code.
     *
     *   The value OK indicates that the request was successful.
     *   For more information about other response codes, see [API error codes](https://help.aliyun.com/document_detail/112502.html).
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The call details of a robocall task, in the JSON format.
     *
     *   **taskId**: the unique ID of the robocall task.
     *   **caller**: the calling number.
     *   **called**: the called number.
     *   **duration**: the call duration. Unit: seconds.
     *   **label**: the label of the called party.
     *   **dialogCount**: the number of conversation rounds in the call.
     *   **callResult**: the call result.
     *   **hangupDirection**: the party who hung up. Valid values: **0**: the robot. **1**: the called party.
     *   **transferResult**: the result of transferring the call to an agent. Valid values: **1**, **0**, and **3**. The value 1 indicates that the call was transferred to the agent. The value 0 indicates that the call failed to be transferred to the agent. The value 3 indicates that the call was not transferred to the agent.
     *   **transferNumber**: the phone number of the agent to whom the call was transferred.
     *   **transferFailReason**: the reason why the call failed to be transferred to the agent.
     *   **callId**: the unique receipt ID of the call, in the `taskId^bizId` format.
     *   **recallCurTimes**: the number of recalls.
     *   **callStartTime**: the start time of the call.
     *   **callEndTime**: the end time of the call.
     *   **sureCount**: the number of times that the robocall task was affirmed.
     *   **denyCount**: the number of times that the robocall task was denied.
     *   **rejectCount**: the number of times that the robocall task was rejected.
     *   **customCount**: the number of times that the robocall task was customized.
     *   **knowledgeCount**: the number of times that the knowledge base was queried.
     *   **defaultCount**: the default number of calls.
     *   **knowledgeBusinessCount**: the number of call failures caused by the business issues in the knowledge base.
     *   **knowledgeCommonCount**: the number of call failures caused by the common issues in the knowledge base.
     *   **recordStatus**: Indicates whether the call has a recording file. Valid values: **1**: The call has a recording file. **2**: The call does not have a recording file.
     *   **recordFile**: the download URL of the recording file.
     *   **dialogDetail**: the dialog details, in a JSON-formatted array. **role**: the object of the speech. **content**: the content of the speech. **speakTime**: the time of the speech.
     *
     * @example { "taskId" : 1045001, "caller" : "0571-8899****", "called" : "130****0000", "duration" : "60", "label" : "Invitation", "dialogCount": "3", "callResult" : "Not Available", "hangupDirection" : "1", "transferResult" : "3", "transferNumber" ：0571-8833****, "transferFailReason" ："User hangs up", "callId" ："116950320375^10375010****", "recallCurTimes" : 2, "callStartTime" : "2019.06.14 15:22:23", "callEndTime" : "2019.06.14 15:22:55", "sureCount" : 2, "denyCount" : 2, "rejectCount" : 0, "customCount" : 0, "knowledgeCount" : 0, "defaultCount" : 0, "knowledgeBusinessCount" : 0, "knowledgeCommonCount" : 0, "recordStatus":1, "recordFile": "http://alicom-fc-record-biz.cn-hangzhou.oss.aliyun-inc.com/Freeswitch_RU_117074080001_ccd71132-8256-4eb4-9217-884e1d87c0d4_record.wav?Expires=1562740186&OSSAccessKeyId=bypFNbGJVk7****&Signature=99losPmytVl%2BMH85noZGD******", "dialogDetail": [{"role": "robot","speakTime": "2019-06-19 20:44:17","content":"prologue"}] }
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
     * @example D9CB3933-9FE3-4870-BA8E-2BEE91B69D23
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
     * @return QueryRobotTaskCallDetailResponseBody
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
