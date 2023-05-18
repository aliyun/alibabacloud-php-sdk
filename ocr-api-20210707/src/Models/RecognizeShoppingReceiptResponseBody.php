<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;

class RecognizeShoppingReceiptResponseBody extends Model
{
    /**
     * @example noPermission
     *
     * @var string
     */
    public $code;

    /**
     * @example {"data": {"shopName": "世纪联华椒江市府大道店", "receiptDate": "2020-04-23", "receiptTime": "20:26:00", "contactNumber": "88068111", "shopAddress": "", "totalAmount": "566.67"}, "ftype": 0, "height": 1047, "orgHeight": 1055, "orgWidth": 690, "prism_keyValueInfo": [{"key": "shopName", "keyProb": 98, "value": "世纪联华椒江市府大道店", "valuePos": [{"x": 51, "y": 239}, {"x": 53, "y": 208}, {"x": 438, "y": 231}, {"x": 436, "y": 262}], "valueProb": 98}, {"key": "receiptDate", "keyProb": 100, "value": "2020-04-23", "valuePos": [{"x": 292, "y": 677}, {"x": 293, "y": 649}, {"x": 428, "y": 651}, {"x": 428, "y": 680}], "valueProb": 100}, {"key": "receiptTime", "keyProb": 100, "value": "20:26:00", "valuePos": [{"x": 435, "y": 681}, {"x": 435, "y": 652}, {"x": 548, "y": 656}, {"x": 547, "y": 684}], "valueProb": 100}, {"key": "contactNumber", "keyProb": 100, "value": "88068111", "valuePos": [{"x": 52, "y": 271}, {"x": 52, "y": 242}, {"x": 160, "y": 246}, {"x": 159, "y": 274}], "valueProb": 100}, {"key": "shopAddress", "keyProb": 100, "value": "", "valueProb": 100}, {"key": "totalAmount", "keyProb": 100, "value": "566.67", "valuePos": [{"x": 206, "y": 522}, {"x": 206, "y": 493}, {"x": 313, "y": 495}, {"x": 313, "y": 524}], "valueProb": 100}], "sliceRect": {"x0": 17, "y0": 8, "x1": 690, "y1": 42, "x2": 690, "y2": 1054, "x3": 6, "y3": 1053}, "width": 684}
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
     * @return RecognizeShoppingReceiptResponseBody
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
