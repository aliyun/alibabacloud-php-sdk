<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetAutonomousNotifyEventContentResponseBody extends Model
{
    /**
     * @description The HTTP status code returned.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The details of the notification events.
     *
     * @example {\\"taskId\\":\\"7e1ba595-0889-48ff-a6ff-010f54991d****\\",\\"taskType\\":\\"SQL_OPTIMIZE\\",\\"advisorId\\":\\"636dc5f34664dd56ff0****\\",\\"sqlId\\":\\"e2b1d6c1ee1bb29555a828b59f16****\\",\\"indexAdviceCount\\":1,\\"indexAdvices\\":[{\\"schemaName\\":\\"das\\",\\"tableName\\":\\"students\\",\\"indexName\\":\\"idx_name\\",\\"columns\\":[\\"name\\"],\\"unique\\":false,\\"ddlAddIndex\\":\\"ALTER TABLE `das`.`students` ADD INDEX `idx_name` (`name`)\\",\\"priority\\":0,\\"optimizeId\\":\\"96232794517277511\\"}],\\"tuningAdvices\\":[],\\"improvement\\":8127.25,\\"supportLevel\\":3,\\"priority\\":\\"HIGH\\"}
     *
     * @var string
     */
    public $data;

    /**
     * @description The returned message.
     *
     * >  If the request was successful, Successful is returned. If the request failed, an error message such as an error code is returned.
     * @example Successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example B6D17591-B48B-4D31-9CD6-9B9796B2****
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
     * @var string
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
            $res['Data'] = $this->data;
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
     * @return GetAutonomousNotifyEventContentResponseBody
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
