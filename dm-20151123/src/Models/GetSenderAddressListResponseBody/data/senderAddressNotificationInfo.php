<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\GetSenderAddressListResponseBody\data;

use AlibabaCloud\Tea\Model;

class senderAddressNotificationInfo extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $senderAddress;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $senderAddressId;
    protected $_name = [
        'status'          => 'Status',
        'updateTime'      => 'UpdateTime',
        'senderAddress'   => 'SenderAddress',
        'region'          => 'Region',
        'senderAddressId' => 'SenderAddressId',
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
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->senderAddress) {
            $res['SenderAddress'] = $this->senderAddress;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->senderAddressId) {
            $res['SenderAddressId'] = $this->senderAddressId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return senderAddressNotificationInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['SenderAddress'])) {
            $model->senderAddress = $map['SenderAddress'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SenderAddressId'])) {
            $model->senderAddressId = $map['SenderAddressId'];
        }

        return $model;
    }
}
