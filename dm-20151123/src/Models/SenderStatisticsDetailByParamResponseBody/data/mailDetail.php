<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\SenderStatisticsDetailByParamResponseBody\data;

use AlibabaCloud\Tea\Model;

class mailDetail extends Model
{
    /**
     * @example s***@example.net
     *
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $errorClassification;

    /**
     * @example 2021-04-28T17:11Z
     *
     * @var string
     */
    public $lastUpdateTime;

    /**
     * @example 250 Send Mail OK
     *
     * @var string
     */
    public $message;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $subject;

    /**
     * @example b***@example.net
     *
     * @var string
     */
    public $toAddress;

    /**
     * @example 1619601108
     *
     * @var string
     */
    public $utcLastUpdateTime;
    protected $_name = [
        'accountName'         => 'AccountName',
        'errorClassification' => 'ErrorClassification',
        'lastUpdateTime'      => 'LastUpdateTime',
        'message'             => 'Message',
        'status'              => 'Status',
        'subject'             => 'Subject',
        'toAddress'           => 'ToAddress',
        'utcLastUpdateTime'   => 'UtcLastUpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->errorClassification) {
            $res['ErrorClassification'] = $this->errorClassification;
        }
        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->toAddress) {
            $res['ToAddress'] = $this->toAddress;
        }
        if (null !== $this->utcLastUpdateTime) {
            $res['UtcLastUpdateTime'] = $this->utcLastUpdateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mailDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['ErrorClassification'])) {
            $model->errorClassification = $map['ErrorClassification'];
        }
        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['ToAddress'])) {
            $model->toAddress = $map['ToAddress'];
        }
        if (isset($map['UtcLastUpdateTime'])) {
            $model->utcLastUpdateTime = $map['UtcLastUpdateTime'];
        }

        return $model;
    }
}
