<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateLivePullToPushResponseBody extends Model
{
    /**
     * @description The description of the custom rule.
     *
     * @example OK
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the request.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68*****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The code that is returned for the request.
     *
     * >
     *
     *   0 is returned if the request is normal.
     *
     *   For information about codes that are returned when exceptions occur, see the following Error codes table.
     *
     * @example 0
     *
     * @var int
     */
    public $retCode;

    /**
     * @description The task ID.
     *
     * @example fd245384-4067-4f91-9d75-9666a6bc9****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'description' => 'Description',
        'requestId' => 'RequestId',
        'retCode' => 'RetCode',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->retCode) {
            $res['RetCode'] = $this->retCode;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLivePullToPushResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RetCode'])) {
            $model->retCode = $map['RetCode'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
