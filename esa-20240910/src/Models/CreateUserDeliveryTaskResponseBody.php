<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateUserDeliveryTaskResponseBody extends Model
{
    /**
     * @example cn
     *
     * @var string
     */
    public $dataCenter;

    /**
     * @description Id of the request
     *
     * @example 2CCD40B1-3F20-5FF0-8A67-E3F34B87744F
     *
     * @var string
     */
    public $requestId;

    /**
     * @example online
     *
     * @var string
     */
    public $status;

    /**
     * @example er-http
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'dataCenter' => 'DataCenter',
        'requestId'  => 'RequestId',
        'status'     => 'Status',
        'taskName'   => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUserDeliveryTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
