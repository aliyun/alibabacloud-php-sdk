<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class UpdatePrivateRdsClassRequest extends Model
{
    /**
     * @description Specifies whether to use vouchers to offset the purchase fees. Valid values: **true** and **false**. Default value: false.
     *
     * > If you downgrade the specifications of an instance after you use the vouchers, the vouchers used for the purchase cannot be refunded.
     * @example true
     *
     * @var bool
     */
    public $autoUseCoupon;

    /**
     * @description The ID of the custom ApsaraDB RDS instance at the storage layer.
     *
     * > You can call the [DescribeDrdsRdsInstances](~~xxxx~~) operation to query the details of all ApsaraDB RDS instances at the storage layer of a PolarDB-X 1.0 instance, including the IDs of the ApsaraDB RDS instances.
     * @example rm-***************
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The ID of the PolarDB-X 1.0 instance.
     *
     * > You can call the [DescribeDrdsInstances](~~139284~~) operation to query the details of all PolarDB-X 1.0 instances within an Alibaba Cloud account, including the IDs of the instances.
     * @example drds*************
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description This parameter is discontinued.
     *
     * @example 12
     *
     * @var int
     */
    public $prePayDuration;

    /**
     * @description The new instance type of the custom ApsaraDB RDS instance at the storage layer.
     *
     * > You can call the [DescribeAvailableClasses](~~196546~~) operation to view the specifications that are supported for a custom ApsaraDB RDS instance. The specifications include the instance type and the storage capacity.
     * @example rds.mysql.c1.xlarge
     *
     * @var string
     */
    public $rdsClass;

    /**
     * @description The new storage capacity of the custom ApsaraDB RDS instance at the storage layer.
     *
     * > You can call the [DescribeAvailableClasses](~~196546~~) operation to view the specifications that are supported for a custom ApsaraDB RDS instance. The specifications include the instance type and the storage capacity.
     * @example 50
     *
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
