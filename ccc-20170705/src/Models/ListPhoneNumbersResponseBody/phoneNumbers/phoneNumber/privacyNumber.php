<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListPhoneNumbersResponseBody\phoneNumbers\phoneNumber;

use AlibabaCloud\Tea\Model;

class privacyNumber extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $poolId;

    /**
     * @var string
     */
    public $poolName;

    /**
     * @var string
     */
    public $regionNameCity;

    /**
     * @var string
     */
    public $subId;

    /**
     * @var string
     */
    public $telX;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bizId'          => 'BizId',
        'extra'          => 'Extra',
        'phoneNumber'    => 'PhoneNumber',
        'poolId'         => 'PoolId',
        'poolName'       => 'PoolName',
        'regionNameCity' => 'RegionNameCity',
        'subId'          => 'SubId',
        'telX'           => 'TelX',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->poolId) {
            $res['PoolId'] = $this->poolId;
        }
        if (null !== $this->poolName) {
            $res['PoolName'] = $this->poolName;
        }
        if (null !== $this->regionNameCity) {
            $res['RegionNameCity'] = $this->regionNameCity;
        }
        if (null !== $this->subId) {
            $res['SubId'] = $this->subId;
        }
        if (null !== $this->telX) {
            $res['TelX'] = $this->telX;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['PoolId'])) {
            $model->poolId = $map['PoolId'];
        }
        if (isset($map['PoolName'])) {
            $model->poolName = $map['PoolName'];
        }
        if (isset($map['RegionNameCity'])) {
            $model->regionNameCity = $map['RegionNameCity'];
        }
        if (isset($map['SubId'])) {
            $model->subId = $map['SubId'];
        }
        if (isset($map['TelX'])) {
            $model->telX = $map['TelX'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
