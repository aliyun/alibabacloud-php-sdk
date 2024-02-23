<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QueryRobotTaskDetailResponseBody extends Model
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
     * @description The details of the robocall task, in the JSON format.
     *
     *   **Id**: the unique ID of the robocall task.
     *   **taskName**: the task name.
     *   **robotId**: the robot ID.
     *   **robotName**: the robot name.
     *   **corpName**: the company name.
     *   **caller**: the number displayed to the called party.
     *   **numberStatusIdent**: indicates whether number status identification was enabled. Valid values: **true** and **false**. The value true indicates that number status identification was enabled. The value false indicates that number status identification was not enabled.
     *   **status**: the task state. You can call the [QueryRobotTaskList](~~QueryRobotTaskList~~) operation to obtain the task state from the `status` parameter.
     *   **scheduleType**: the scheduling type. Valid values: **SINGLE** and **ORDER**. The value SINGLE indicates that the task was started immediately after it was created. The value ORDER indicates that the task was started at a scheduled time.
     *   **retryType**: indicates whether auto-redial was enabled. Valid values: **1** and **0**. The value 1 indicates that auto-redial was enabled. The value 0 indicates that auto-redial was not enabled.
     *   **recallStateCodes**: the call state in which redial is required. Valid values: **200010**, **200011**, **200002**, **200012**, and **200005**. The value 200010 indicates that the phone of the called party was powered off. The value 200011 indicates that the number of the called party was out of service. The value 200002 indicates that the line was busy. The value 200012 indicates that the call was lost. The value 200005 indicates that the called party could not be connected.
     *   **recallTimes**: the number of redial times.
     *   **recallInterval**: the redial interval. Unit: minutes.
     *   **createTime**: the time when the task was created, in the yyyy-MM-dd HH:mm:ss format.
     *   **fireTime**: the time when the task was started, in the yyyy-MM-dd HH:mm:ss format.
     *   **completeTime**: the time when the task was completed, in the yyyy-MM-dd HH:mm:ss format.
     *   **filename**: the name of the called number file.
     *   **ossFilePath**: the path of the called number file.
     *
     * @example {"id":1045001,"taskName":"Test Template","robotId":1000000075003,"robotName":"robot","corpName":"company ","caller":"057156xxxx,0571568xxxx", "numberStatusIdent":true,"status":"INIT","scheduleType":"SINGLE", "retryType":1,"recallStateCodes":"200010,200011", "recallTimes":2,"recallInterval":5,"createTime": "2019-06-14 11:04:19","fireTime":"2019-06-14 11:05:23","completeTime": "2019-06-14 18:21:06","called": [{"fileName": "5102636f-7be6-4a2d-9ac7-755a2e140a50--robotCallApi", "ossFilePath": "http://test.cn-hangzhou.oss.aliyun-inc.com/5102636f-7be6-4a2d-9ac7-755a2e140a50--robotCallApi.xlsx"}]}
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
     * @return QueryRobotTaskDetailResponseBody
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
