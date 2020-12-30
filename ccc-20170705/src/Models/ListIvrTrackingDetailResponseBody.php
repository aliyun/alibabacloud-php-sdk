<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListIvrTrackingDetailResponseBody\ivrTrackingDetails;
use AlibabaCloud\Tea\Model;

class ListIvrTrackingDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var ivrTrackingDetails
     */
    public $ivrTrackingDetails;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'message'            => 'Message',
        'requestId'          => 'RequestId',
        'httpStatusCode'     => 'HttpStatusCode',
        'ivrTrackingDetails' => 'IvrTrackingDetails',
        'code'               => 'Code',
        'success'            => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->ivrTrackingDetails) {
            $res['IvrTrackingDetails'] = null !== $this->ivrTrackingDetails ? $this->ivrTrackingDetails->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIvrTrackingDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['IvrTrackingDetails'])) {
            $model->ivrTrackingDetails = ivrTrackingDetails::fromMap($map['IvrTrackingDetails']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
