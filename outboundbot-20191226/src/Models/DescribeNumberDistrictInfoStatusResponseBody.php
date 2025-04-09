<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeNumberDistrictInfoStatusResponseBody\appliedVersion;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeNumberDistrictInfoStatusResponseBody\parsingVersion;

class DescribeNumberDistrictInfoStatusResponseBody extends Model
{
    /**
     * @var appliedVersion
     */
    public $appliedVersion;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var parsingVersion
     */
    public $parsingVersion;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'appliedVersion' => 'AppliedVersion',
        'code' => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'message' => 'Message',
        'parsingVersion' => 'ParsingVersion',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->appliedVersion) {
            $this->appliedVersion->validate();
        }
        if (null !== $this->parsingVersion) {
            $this->parsingVersion->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appliedVersion) {
            $res['AppliedVersion'] = null !== $this->appliedVersion ? $this->appliedVersion->toArray($noStream) : $this->appliedVersion;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->parsingVersion) {
            $res['ParsingVersion'] = null !== $this->parsingVersion ? $this->parsingVersion->toArray($noStream) : $this->parsingVersion;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppliedVersion'])) {
            $model->appliedVersion = appliedVersion::fromMap($map['AppliedVersion']);
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['ParsingVersion'])) {
            $model->parsingVersion = parsingVersion::fromMap($map['ParsingVersion']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
