<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO\rdsOrderDOList;

use AlibabaCloud\Tea\Model;

class rdsOrderDOList extends Model
{
    /**
     * @description The zone ID of the node.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $azoneId;

    /**
     * @description The capacity of disk.
     *
     * @example 10240
     *
     * @var string
     */
    public $dbInstanceStorage;

    /**
     * @description The storage engine of the instance.
     *
     * @example MYSQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The instance type of the instance.
     *
     * @example rds.mysql.s2.large
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The network type. Valid values: - **Classic **: Classic Network
     * - **vpc**: VPC
     * @example VPC
     *
     * @var string
     */
    public $network;

    /**
     * @description The number of streams that were returned.
     *
     * @example 1
     *
     * @var int
     */
    public $num;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The version of the operating system.
     *
     * @example 5.6
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'azoneId'           => 'AzoneId',
        'dbInstanceStorage' => 'DbInstanceStorage',
        'engine'            => 'Engine',
        'instanceClass'     => 'InstanceClass',
        'network'           => 'Network',
        'num'               => 'Num',
        'regionId'          => 'RegionId',
        'version'           => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->azoneId) {
            $res['AzoneId'] = $this->azoneId;
        }
        if (null !== $this->dbInstanceStorage) {
            $res['DbInstanceStorage'] = $this->dbInstanceStorage;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rdsOrderDOList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AzoneId'])) {
            $model->azoneId = $map['AzoneId'];
        }
        if (isset($map['DbInstanceStorage'])) {
            $model->dbInstanceStorage = $map['DbInstanceStorage'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
