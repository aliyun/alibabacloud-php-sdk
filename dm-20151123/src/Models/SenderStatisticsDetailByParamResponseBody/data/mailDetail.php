<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\SenderStatisticsDetailByParamResponseBody\data;

use AlibabaCloud\Dara\Model;

class mailDetail extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $errorClassification;

    /**
     * @var string
     */
    public $lastUpdateTime;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $toAddress;

    /**
     * @var string
     */
    public $utcLastUpdateTime;
    protected $_name = [
        'accountName' => 'AccountName',
        'errorClassification' => 'ErrorClassification',
        'lastUpdateTime' => 'LastUpdateTime',
        'message' => 'Message',
        'status' => 'Status',
        'subject' => 'Subject',
        'toAddress' => 'ToAddress',
        'utcLastUpdateTime' => 'UtcLastUpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
