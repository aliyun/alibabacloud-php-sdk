<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class DeleteFreeLicenseResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string[]
     */
    public $failedLicenseItemIdList;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'failedLicenseItemIdList' => 'FailedLicenseItemIdList',
        'httpStatusCode' => 'HttpStatusCode',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->failedLicenseItemIdList)) {
            Model::validateArray($this->failedLicenseItemIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->failedLicenseItemIdList) {
            if (\is_array($this->failedLicenseItemIdList)) {
                $res['FailedLicenseItemIdList'] = [];
                $n1 = 0;
                foreach ($this->failedLicenseItemIdList as $item1) {
                    $res['FailedLicenseItemIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['FailedLicenseItemIdList'])) {
            if (!empty($map['FailedLicenseItemIdList'])) {
                $model->failedLicenseItemIdList = [];
                $n1 = 0;
                foreach ($map['FailedLicenseItemIdList'] as $item1) {
                    $model->failedLicenseItemIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
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
