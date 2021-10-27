<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class UpdatePrivateRdsClassRequest extends Model
{
    /**
     * @var bool
     */
    public $autoUseCoupon;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var int
     */
    public $prePayDuration;

    /**
     * @var string
     */
    public $rdsClass;

    /**
     * @var string
     */
    public $storage;
    protected $_name = [
        'autoUseCoupon'  => 'AutoUseCoupon',
        'DBInstanceId'   => 'DBInstanceId',
        'drdsInstanceId' => 'DrdsInstanceId',
        'prePayDuration' => 'PrePayDuration',
        'rdsClass'       => 'RdsClass',
        'storage'        => 'Storage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->prePayDuration) {
            $res['PrePayDuration'] = $this->prePayDuration;
        }
        if (null !== $this->rdsClass) {
            $res['RdsClass'] = $this->rdsClass;
        }
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
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
        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['PrePayDuration'])) {
            $model->prePayDuration = $map['PrePayDuration'];
        }
        if (isset($map['RdsClass'])) {
            $model->rdsClass = $map['RdsClass'];
        }
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }

        return $model;
    }
}
