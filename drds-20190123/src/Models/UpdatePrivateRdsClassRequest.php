<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class UpdatePrivateRdsClassRequest extends Model
{
    /**
     * @var string
     */
    public $rdsClass;

    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $storage;

    /**
     * @var bool
     */
    public $autoUseCoupon;

    /**
     * @var int
     */
    public $prePayDuration;
    protected $_name = [
        'rdsClass'       => 'RdsClass',
        'drdsInstanceId' => 'DrdsInstanceId',
        'DBInstanceId'   => 'DBInstanceId',
        'storage'        => 'Storage',
        'autoUseCoupon'  => 'AutoUseCoupon',
        'prePayDuration' => 'PrePayDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rdsClass) {
            $res['RdsClass'] = $this->rdsClass;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }
        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }
        if (null !== $this->prePayDuration) {
            $res['PrePayDuration'] = $this->prePayDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePrivateRdsClassRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RdsClass'])) {
            $model->rdsClass = $map['RdsClass'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }
        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }
        if (isset($map['PrePayDuration'])) {
            $model->prePayDuration = $map['PrePayDuration'];
        }

        return $model;
    }
}
