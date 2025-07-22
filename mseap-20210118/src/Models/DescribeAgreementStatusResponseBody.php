<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models;

use AlibabaCloud\Tea\Model;

class DescribeAgreementStatusResponseBody extends Model
{
    /**
     * @example 10aa40008e081ad7b1fb50bffc3a70b1
     *
     * @var string
     */
    public $agreementCode;

    /**
     * @example 6254E13A-A79F-5786-9C75-7590727342C9
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example 1219541161213057
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'agreementCode' => 'AgreementCode',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agreementCode) {
            $res['AgreementCode'] = $this->agreementCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AgreementCode'])) {
            $model->agreementCode = $map['AgreementCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
