<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryTransferInListResponseBody\data;

use AlibabaCloud\Tea\Model;

class transferInInfo extends Model
{
    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 2018-03-28 00:41:42
     *
     * @var string
     */
    public $expirationDate;

    /**
     * @example 1514428524669
     *
     * @var int
     */
    public $expirationDateLong;

    /**
     * @example S20181T0WLI85212
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 2018-03-28 00:41:42
     *
     * @var string
     */
    public $modificationDate;

    /**
     * @example 1514428524669
     *
     * @var int
     */
    public $modificationDateLong;

    /**
     * @example true
     *
     * @var bool
     */
    public $needMailCheck;

    /**
     * @example 0
     *
     * @var int
     */
    public $progressBarType;

    /**
     * @example clientCancelled
     *
     * @var string
     */
    public $resultCode;

    /**
     * @example 2018-03-28 00:41:42
     *
     * @var string
     */
    public $resultDate;

    /**
     * @example 1514428524669
     *
     * @var int
     */
    public $resultDateLong;

    /**
     * @var string
     */
    public $resultMsg;

    /**
     * @example FAIL
     *
     * @var string
     */
    public $simpleTransferInStatus;

    /**
     * @example 11
     *
     * @var int
     */
    public $status;

    /**
     * @example 2018-03-28 00:41:42
     *
     * @var string
     */
    public $submissionDate;

    /**
     * @example 1514428524669
     *
     * @var int
     */
    public $submissionDateLong;

    /**
     * @example 2018-03-28 00:41:42
     *
     * @var string
     */
    public $transferAuthorizationCodeSubmissionDate;

    /**
     * @example 1514428524669
     *
     * @var int
     */
    public $transferAuthorizationCodeSubmissionDateLong;

    /**
     * @example 123456
     *
     * @var string
     */
    public $userId;

    /**
     * @example true
     *
     * @var bool
     */
    public $whoisMailStatus;
    protected $_name = [
        'domainName'                                  => 'DomainName',
        'email'                                       => 'Email',
        'expirationDate'                              => 'ExpirationDate',
        'expirationDateLong'                          => 'ExpirationDateLong',
        'instanceId'                                  => 'InstanceId',
        'modificationDate'                            => 'ModificationDate',
        'modificationDateLong'                        => 'ModificationDateLong',
        'needMailCheck'                               => 'NeedMailCheck',
        'progressBarType'                             => 'ProgressBarType',
        'resultCode'                                  => 'ResultCode',
        'resultDate'                                  => 'ResultDate',
        'resultDateLong'                              => 'ResultDateLong',
        'resultMsg'                                   => 'ResultMsg',
        'simpleTransferInStatus'                      => 'SimpleTransferInStatus',
        'status'                                      => 'Status',
        'submissionDate'                              => 'SubmissionDate',
        'submissionDateLong'                          => 'SubmissionDateLong',
        'transferAuthorizationCodeSubmissionDate'     => 'TransferAuthorizationCodeSubmissionDate',
        'transferAuthorizationCodeSubmissionDateLong' => 'TransferAuthorizationCodeSubmissionDateLong',
        'userId'                                      => 'UserId',
        'whoisMailStatus'                             => 'WhoisMailStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->expirationDate) {
            $res['ExpirationDate'] = $this->expirationDate;
        }
        if (null !== $this->expirationDateLong) {
            $res['ExpirationDateLong'] = $this->expirationDateLong;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->modificationDate) {
            $res['ModificationDate'] = $this->modificationDate;
        }
        if (null !== $this->modificationDateLong) {
            $res['ModificationDateLong'] = $this->modificationDateLong;
        }
        if (null !== $this->needMailCheck) {
            $res['NeedMailCheck'] = $this->needMailCheck;
        }
        if (null !== $this->progressBarType) {
            $res['ProgressBarType'] = $this->progressBarType;
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }
        if (null !== $this->resultDate) {
            $res['ResultDate'] = $this->resultDate;
        }
        if (null !== $this->resultDateLong) {
            $res['ResultDateLong'] = $this->resultDateLong;
        }
        if (null !== $this->resultMsg) {
            $res['ResultMsg'] = $this->resultMsg;
        }
        if (null !== $this->simpleTransferInStatus) {
            $res['SimpleTransferInStatus'] = $this->simpleTransferInStatus;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->submissionDate) {
            $res['SubmissionDate'] = $this->submissionDate;
        }
        if (null !== $this->submissionDateLong) {
            $res['SubmissionDateLong'] = $this->submissionDateLong;
        }
        if (null !== $this->transferAuthorizationCodeSubmissionDate) {
            $res['TransferAuthorizationCodeSubmissionDate'] = $this->transferAuthorizationCodeSubmissionDate;
        }
        if (null !== $this->transferAuthorizationCodeSubmissionDateLong) {
            $res['TransferAuthorizationCodeSubmissionDateLong'] = $this->transferAuthorizationCodeSubmissionDateLong;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->whoisMailStatus) {
            $res['WhoisMailStatus'] = $this->whoisMailStatus;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['ExpirationDate'])) {
            $model->expirationDate = $map['ExpirationDate'];
        }
        if (isset($map['ExpirationDateLong'])) {
            $model->expirationDateLong = $map['ExpirationDateLong'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ModificationDate'])) {
            $model->modificationDate = $map['ModificationDate'];
        }
        if (isset($map['ModificationDateLong'])) {
            $model->modificationDateLong = $map['ModificationDateLong'];
        }
        if (isset($map['NeedMailCheck'])) {
            $model->needMailCheck = $map['NeedMailCheck'];
        }
        if (isset($map['ProgressBarType'])) {
            $model->progressBarType = $map['ProgressBarType'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }
        if (isset($map['ResultDate'])) {
            $model->resultDate = $map['ResultDate'];
        }
        if (isset($map['ResultDateLong'])) {
            $model->resultDateLong = $map['ResultDateLong'];
        }
        if (isset($map['ResultMsg'])) {
            $model->resultMsg = $map['ResultMsg'];
        }
        if (isset($map['SimpleTransferInStatus'])) {
            $model->simpleTransferInStatus = $map['SimpleTransferInStatus'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubmissionDate'])) {
            $model->submissionDate = $map['SubmissionDate'];
        }
        if (isset($map['SubmissionDateLong'])) {
            $model->submissionDateLong = $map['SubmissionDateLong'];
        }
        if (isset($map['TransferAuthorizationCodeSubmissionDate'])) {
            $model->transferAuthorizationCodeSubmissionDate = $map['TransferAuthorizationCodeSubmissionDate'];
        }
        if (isset($map['TransferAuthorizationCodeSubmissionDateLong'])) {
            $model->transferAuthorizationCodeSubmissionDateLong = $map['TransferAuthorizationCodeSubmissionDateLong'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WhoisMailStatus'])) {
            $model->whoisMailStatus = $map['WhoisMailStatus'];
        }

        return $model;
    }
}
