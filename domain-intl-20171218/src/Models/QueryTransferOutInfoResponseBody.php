<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models;

use AlibabaCloud\Tea\Model;

class QueryTransferOutInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $expirationDate;

    /**
     * @var string
     */
    public $pendingRequestDate;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resultCode;

    /**
     * @var string
     */
    public $resultMsg;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $transferAuthorizationCodeSendDate;
    protected $_name = [
        'email'                             => 'Email',
        'expirationDate'                    => 'ExpirationDate',
        'pendingRequestDate'                => 'PendingRequestDate',
        'requestId'                         => 'RequestId',
        'resultCode'                        => 'ResultCode',
        'resultMsg'                         => 'ResultMsg',
        'status'                            => 'Status',
        'transferAuthorizationCodeSendDate' => 'TransferAuthorizationCodeSendDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->expirationDate) {
            $res['ExpirationDate'] = $this->expirationDate;
        }
        if (null !== $this->pendingRequestDate) {
            $res['PendingRequestDate'] = $this->pendingRequestDate;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['ResultMsg'] = $this->resultMsg;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->transferAuthorizationCodeSendDate) {
            $res['TransferAuthorizationCodeSendDate'] = $this->transferAuthorizationCodeSendDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTransferOutInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['ExpirationDate'])) {
            $model->expirationDate = $map['ExpirationDate'];
        }
        if (isset($map['PendingRequestDate'])) {
            $model->pendingRequestDate = $map['PendingRequestDate'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }
        if (isset($map['ResultMsg'])) {
            $model->resultMsg = $map['ResultMsg'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TransferAuthorizationCodeSendDate'])) {
            $model->transferAuthorizationCodeSendDate = $map['TransferAuthorizationCodeSendDate'];
        }

        return $model;
    }
}
