<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models;

use AlibabaCloud\Tea\Model;

class DescribeAgreementStatusResponseBody extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $agreementCode;
    protected $_name = [
        'status'        => 'Status',
        'requestId'     => 'RequestId',
        'userId'        => 'UserId',
        'agreementCode' => 'AgreementCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->agreementCode) {
            $res['AgreementCode'] = $this->agreementCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAgreementStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['AgreementCode'])) {
            $model->agreementCode = $map['AgreementCode'];
        }

        return $model;
    }
}
