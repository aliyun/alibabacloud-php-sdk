<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\SDK\Objectdet\V20191230\Models\GenerateVehicleRepairPlanResponseBody\data;
use AlibabaCloud\Tea\Model;

class GenerateVehicleRepairPlanResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var data
     */
    public $data;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $httpCode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'         => 'Code',
        'data'         => 'Data',
        'errorMessage' => 'ErrorMessage',
        'httpCode'     => 'HttpCode',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
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
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->httpCode) {
            $res['HttpCode'] = $this->httpCode;
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
     * @return GenerateVehicleRepairPlanResponseBody
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
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['HttpCode'])) {
            $model->httpCode = $map['HttpCode'];
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
