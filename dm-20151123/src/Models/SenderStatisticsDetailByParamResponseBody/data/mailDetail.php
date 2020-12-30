<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\SenderStatisticsDetailByParamResponseBody\data;

use AlibabaCloud\Tea\Model;

class mailDetail extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $lastUpdateTime;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $toAddress;

    /**
     * @var string
     */
    public $utcLastUpdateTime;

    /**
     * @var string
     */
    public $accountName;
    protected $_name = [
        'status'            => 'Status',
        'lastUpdateTime'    => 'LastUpdateTime',
        'message'           => 'Message',
        'toAddress'         => 'ToAddress',
        'utcLastUpdateTime' => 'UtcLastUpdateTime',
        'accountName'       => 'AccountName',
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
        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->toAddress) {
            $res['ToAddress'] = $this->toAddress;
        }
        if (null !== $this->utcLastUpdateTime) {
            $res['UtcLastUpdateTime'] = $this->utcLastUpdateTime;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ToAddress'])) {
            $model->toAddress = $map['ToAddress'];
        }
        if (isset($map['UtcLastUpdateTime'])) {
            $model->utcLastUpdateTime = $map['UtcLastUpdateTime'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        return $model;
    }
}
