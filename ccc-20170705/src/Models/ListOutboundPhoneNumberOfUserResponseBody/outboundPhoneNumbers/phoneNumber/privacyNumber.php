<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListOutboundPhoneNumberOfUserResponseBody\outboundPhoneNumbers\phoneNumber;

use AlibabaCloud\Tea\Model;

class privacyNumber extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $poolId;

    /**
     * @var string
     */
    public $subId;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $poolName;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $regionNameCity;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $telX;
    protected $_name = [
        'type'           => 'Type',
        'poolId'         => 'PoolId',
        'subId'          => 'SubId',
        'phoneNumber'    => 'PhoneNumber',
        'poolName'       => 'PoolName',
        'bizId'          => 'BizId',
        'regionNameCity' => 'RegionNameCity',
        'extra'          => 'Extra',
        'telX'           => 'TelX',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->poolId) {
            $res['PoolId'] = $this->poolId;
        }
        if (null !== $this->subId) {
            $res['SubId'] = $this->subId;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->poolName) {
            $res['PoolName'] = $this->poolName;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->regionNameCity) {
            $res['RegionNameCity'] = $this->regionNameCity;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->telX) {
            $res['TelX'] = $this->telX;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privacyNumber
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['PoolId'])) {
            $model->poolId = $map['PoolId'];
        }
        if (isset($map['SubId'])) {
            $model->subId = $map['SubId'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['PoolName'])) {
            $model->poolName = $map['PoolName'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['RegionNameCity'])) {
            $model->regionNameCity = $map['RegionNameCity'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['TelX'])) {
            $model->telX = $map['TelX'];
        }

        return $model;
    }
}
