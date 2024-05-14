<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models;

use AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeLabReservationResponseBody\labReservation;
use AlibabaCloud\Tea\Model;

class DescribeLabReservationResponseBody extends Model
{
    /**
     * @example 00000
     *
     * @var string
     */
    public $code;

    /**
     * @var labReservation
     */
    public $labReservation;

    /**
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @example 9ADC729B-...
     *
     * @var string
     */
    public $requestId;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'           => 'Code',
        'labReservation' => 'LabReservation',
        'message'        => 'Message',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
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
        if (null !== $this->labReservation) {
            $res['LabReservation'] = null !== $this->labReservation ? $this->labReservation->toMap() : null;
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
     * @return DescribeLabReservationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['LabReservation'])) {
            $model->labReservation = labReservation::fromMap($map['LabReservation']);
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
