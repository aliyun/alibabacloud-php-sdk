<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetSubscriptionDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $phoneNo;

    /**
     * @var string
     */
    public $city;

    /**
     * @var int
     */
    public $switchStatus;

    /**
     * @var int
     */
    public $subsId;

    /**
     * @var string
     */
    public $secretNo;

    /**
     * @var string
     */
    public $vendor;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'phoneNo'      => 'PhoneNo',
        'city'         => 'City',
        'switchStatus' => 'SwitchStatus',
        'subsId'       => 'SubsId',
        'secretNo'     => 'SecretNo',
        'vendor'       => 'Vendor',
        'province'     => 'Province',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phoneNo) {
            $res['PhoneNo'] = $this->phoneNo;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->switchStatus) {
            $res['SwitchStatus'] = $this->switchStatus;
        }
        if (null !== $this->subsId) {
            $res['SubsId'] = $this->subsId;
        }
        if (null !== $this->secretNo) {
            $res['SecretNo'] = $this->secretNo;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
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
        if (isset($map['PhoneNo'])) {
            $model->phoneNo = $map['PhoneNo'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['SwitchStatus'])) {
            $model->switchStatus = $map['SwitchStatus'];
        }
        if (isset($map['SubsId'])) {
            $model->subsId = $map['SubsId'];
        }
        if (isset($map['SecretNo'])) {
            $model->secretNo = $map['SecretNo'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
