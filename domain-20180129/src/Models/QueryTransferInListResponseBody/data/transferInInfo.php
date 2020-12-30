<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryTransferInListResponseBody\data;

use AlibabaCloud\Tea\Model;

class transferInInfo extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $modificationDate;

    /**
     * @var int
     */
    public $transferAuthorizationCodeSubmissionDateLong;

    /**
     * @var int
     */
    public $submissionDateLong;

    /**
     * @var string
     */
    public $resultCode;

    /**
     * @var bool
     */
    public $needMailCheck;

    /**
     * @var int
     */
    public $modificationDateLong;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $progressBarType;

    /**
     * @var string
     */
    public $resultMsg;

    /**
     * @var int
     */
    public $resultDateLong;

    /**
     * @var string
     */
    public $expirationDate;

    /**
     * @var string
     */
    public $email;

    /**
     * @var bool
     */
    public $whoisMailStatus;

    /**
     * @var string
     */
    public $transferAuthorizationCodeSubmissionDate;

    /**
     * @var string
     */
    public $submissionDate;

    /**
     * @var int
     */
    public $expirationDateLong;

    /**
     * @var string
     */
    public $simpleTransferInStatus;

    /**
     * @var string
     */
    public $resultDate;
    protected $_name = [
        'status'                                      => 'Status',
        'userId'                                      => 'UserId',
        'modificationDate'                            => 'ModificationDate',
        'transferAuthorizationCodeSubmissionDateLong' => 'TransferAuthorizationCodeSubmissionDateLong',
        'submissionDateLong'                          => 'SubmissionDateLong',
        'resultCode'                                  => 'ResultCode',
        'needMailCheck'                               => 'NeedMailCheck',
        'modificationDateLong'                        => 'ModificationDateLong',
        'instanceId'                                  => 'InstanceId',
        'domainName'                                  => 'DomainName',
        'progressBarType'                             => 'ProgressBarType',
        'resultMsg'                                   => 'ResultMsg',
        'resultDateLong'                              => 'ResultDateLong',
        'expirationDate'                              => 'ExpirationDate',
        'email'                                       => 'Email',
        'whoisMailStatus'                             => 'WhoisMailStatus',
        'transferAuthorizationCodeSubmissionDate'     => 'TransferAuthorizationCodeSubmissionDate',
        'submissionDate'                              => 'SubmissionDate',
        'expirationDateLong'                          => 'ExpirationDateLong',
        'simpleTransferInStatus'                      => 'SimpleTransferInStatus',
        'resultDate'                                  => 'ResultDate',
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->modificationDate) {
            $res['ModificationDate'] = $this->modificationDate;
        }
        if (null !== $this->transferAuthorizationCodeSubmissionDateLong) {
            $res['TransferAuthorizationCodeSubmissionDateLong'] = $this->transferAuthorizationCodeSubmissionDateLong;
        }
        if (null !== $this->submissionDateLong) {
            $res['SubmissionDateLong'] = $this->submissionDateLong;
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }
        if (null !== $this->needMailCheck) {
            $res['NeedMailCheck'] = $this->needMailCheck;
        }
        if (null !== $this->modificationDateLong) {
            $res['ModificationDateLong'] = $this->modificationDateLong;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->progressBarType) {
            $res['ProgressBarType'] = $this->progressBarType;
        }
        if (null !== $this->resultMsg) {
            $res['ResultMsg'] = $this->resultMsg;
        }
        if (null !== $this->resultDateLong) {
            $res['ResultDateLong'] = $this->resultDateLong;
        }
        if (null !== $this->expirationDate) {
            $res['ExpirationDate'] = $this->expirationDate;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->whoisMailStatus) {
            $res['WhoisMailStatus'] = $this->whoisMailStatus;
        }
        if (null !== $this->transferAuthorizationCodeSubmissionDate) {
            $res['TransferAuthorizationCodeSubmissionDate'] = $this->transferAuthorizationCodeSubmissionDate;
        }
        if (null !== $this->submissionDate) {
            $res['SubmissionDate'] = $this->submissionDate;
        }
        if (null !== $this->expirationDateLong) {
            $res['ExpirationDateLong'] = $this->expirationDateLong;
        }
        if (null !== $this->simpleTransferInStatus) {
            $res['SimpleTransferInStatus'] = $this->simpleTransferInStatus;
        }
        if (null !== $this->resultDate) {
            $res['ResultDate'] = $this->resultDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transferInInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['ModificationDate'])) {
            $model->modificationDate = $map['ModificationDate'];
        }
        if (isset($map['TransferAuthorizationCodeSubmissionDateLong'])) {
            $model->transferAuthorizationCodeSubmissionDateLong = $map['TransferAuthorizationCodeSubmissionDateLong'];
        }
        if (isset($map['SubmissionDateLong'])) {
            $model->submissionDateLong = $map['SubmissionDateLong'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }
        if (isset($map['NeedMailCheck'])) {
            $model->needMailCheck = $map['NeedMailCheck'];
        }
        if (isset($map['ModificationDateLong'])) {
            $model->modificationDateLong = $map['ModificationDateLong'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ProgressBarType'])) {
            $model->progressBarType = $map['ProgressBarType'];
        }
        if (isset($map['ResultMsg'])) {
            $model->resultMsg = $map['ResultMsg'];
        }
        if (isset($map['ResultDateLong'])) {
            $model->resultDateLong = $map['ResultDateLong'];
        }
        if (isset($map['ExpirationDate'])) {
            $model->expirationDate = $map['ExpirationDate'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['WhoisMailStatus'])) {
            $model->whoisMailStatus = $map['WhoisMailStatus'];
        }
        if (isset($map['TransferAuthorizationCodeSubmissionDate'])) {
            $model->transferAuthorizationCodeSubmissionDate = $map['TransferAuthorizationCodeSubmissionDate'];
        }
        if (isset($map['SubmissionDate'])) {
            $model->submissionDate = $map['SubmissionDate'];
        }
        if (isset($map['ExpirationDateLong'])) {
            $model->expirationDateLong = $map['ExpirationDateLong'];
        }
        if (isset($map['SimpleTransferInStatus'])) {
            $model->simpleTransferInStatus = $map['SimpleTransferInStatus'];
        }
        if (isset($map['ResultDate'])) {
            $model->resultDate = $map['ResultDate'];
        }

        return $model;
    }
}
