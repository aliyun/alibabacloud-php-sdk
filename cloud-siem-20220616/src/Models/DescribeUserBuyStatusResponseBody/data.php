<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeUserBuyStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $canBuy;

    /**
     * @example 1024
     *
     * @var int
     */
    public $capacity;

    /**
     * @example 3
     *
     * @var int
     */
    public $durationDays;

    /**
     * @example 1669823999000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 123XXXXXX
     *
     * @var int
     */
    public $mainUserId;

    /**
     * @example sas_account_xxx
     *
     * @var string
     */
    public $mainUserName;

    /**
     * @example 123XXXXXX
     *
     * @var int
     */
    public $masterUserId;

    /**
     * @example rd_master_xxx
     *
     * @var string
     */
    public $masterUserName;

    /**
     * @example sas-instance-xxxxx
     *
     * @var string
     */
    public $sasInstanceId;

    /**
     * @example 123XXXXXX
     *
     * @var int
     */
    public $subUserId;

    /**
     * @example sas_account_xxx
     *
     * @var string
     */
    public $subUserName;
    protected $_name = [
        'canBuy'         => 'CanBuy',
        'capacity'       => 'Capacity',
        'durationDays'   => 'DurationDays',
        'endTime'        => 'EndTime',
        'mainUserId'     => 'MainUserId',
        'mainUserName'   => 'MainUserName',
        'masterUserId'   => 'MasterUserId',
        'masterUserName' => 'MasterUserName',
        'sasInstanceId'  => 'SasInstanceId',
        'subUserId'      => 'SubUserId',
        'subUserName'    => 'SubUserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canBuy) {
            $res['CanBuy'] = $this->canBuy;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->durationDays) {
            $res['DurationDays'] = $this->durationDays;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->mainUserId) {
            $res['MainUserId'] = $this->mainUserId;
        }
        if (null !== $this->mainUserName) {
            $res['MainUserName'] = $this->mainUserName;
        }
        if (null !== $this->masterUserId) {
            $res['MasterUserId'] = $this->masterUserId;
        }
        if (null !== $this->masterUserName) {
            $res['MasterUserName'] = $this->masterUserName;
        }
        if (null !== $this->sasInstanceId) {
            $res['SasInstanceId'] = $this->sasInstanceId;
        }
        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }
        if (null !== $this->subUserName) {
            $res['SubUserName'] = $this->subUserName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanBuy'])) {
            $model->canBuy = $map['CanBuy'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['DurationDays'])) {
            $model->durationDays = $map['DurationDays'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MainUserId'])) {
            $model->mainUserId = $map['MainUserId'];
        }
        if (isset($map['MainUserName'])) {
            $model->mainUserName = $map['MainUserName'];
        }
        if (isset($map['MasterUserId'])) {
            $model->masterUserId = $map['MasterUserId'];
        }
        if (isset($map['MasterUserName'])) {
            $model->masterUserName = $map['MasterUserName'];
        }
        if (isset($map['SasInstanceId'])) {
            $model->sasInstanceId = $map['SasInstanceId'];
        }
        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }
        if (isset($map['SubUserName'])) {
            $model->subUserName = $map['SubUserName'];
        }

        return $model;
    }
}
