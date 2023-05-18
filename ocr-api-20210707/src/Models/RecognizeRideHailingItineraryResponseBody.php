<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;

class RecognizeRideHailingItineraryResponseBody extends Model
{
    /**
     * @example noPermission
     *
     * @var string
     */
    public $code;

    /**
     * @example {"data":{"serviceProvider":"滴滴出行","applicationDate":"","startTime":"","endTime":"","phoneNumber":"","totalAmount":"","rideDetails":[{"Number":"","carType":"","pickUpTime":"","city":"","startPlace":"","endPlace":"","mileage":"","amount":"","remarks":""}]},"ftype":0,"height":260,"orgHeight":260,"orgWidth":194,"prism_keyValueInfo":[{"key":"serviceProvider","keyProb":99,"value":"滴滴出行","valuePos":[{"x":120,"y":11},{"x":120,"y":21},{"x":57,"y":20},{"x":57,"y":10}],"valueProb":99},{"key":"applicationDate","keyProb":100,"value":"","valueProb":100},{"key":"startTime","keyProb":91,"value":"","valuePos":[{"x":94,"y":46},{"x":94,"y":50},{"x":75,"y":50},{"x":75,"y":46}],"valueProb":91},{"key":"endTime","keyProb":65,"value":"","valuePos":[{"x":112,"y":46},{"x":112,"y":50},{"x":95,"y":50},{"x":95,"y":46}],"valueProb":65},{"key":"phoneNumber","keyProb":100,"value":"","valueProb":100},{"key":"totalAmount","keyProb":100,"value":"","valueProb":100},{"key":"rideDetails","keyProb":100,"value":"[{\"Number\":\"\",\"carType\":\"\",\"pickUpTime\":\"\",\"city\":\"\",\"startPlace\":\"\",\"endPlace\":\"\",\"mileage\":\"\",\"amount\":\"\",\"remarks\":\"\"}]","valueProb":100}],"sliceRect":{"x0":6,"y0":72,"x1":186,"y1":72,"x2":186,"y2":156,"x3":6,"y3":156},"width":194}
     *
     * @var string
     */
    public $data;

    /**
     * @example You are not authorized to perform this operation.
     *
     * @var string
     */
    public $message;

    /**
     * @example 43A29C77-405E-4CC0-BC55-EE694AD00655
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
     * @return RecognizeRideHailingItineraryResponseBody
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
