<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO\rdsOrderDOList;

use AlibabaCloud\Tea\Model;

class rdsOrderDOList extends Model
{
    /**
     * @var string
     */
    public $network;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $dbInstanceStorage;

    /**
     * @var int
     */
    public $num;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $azoneId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'network'           => 'Network',
        'version'           => 'Version',
        'instanceClass'     => 'InstanceClass',
        'dbInstanceStorage' => 'DbInstanceStorage',
        'num'               => 'Num',
        'engine'            => 'Engine',
        'azoneId'           => 'AzoneId',
        'regionId'          => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->dbInstanceStorage) {
            $res['DbInstanceStorage'] = $this->dbInstanceStorage;
        }
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->azoneId) {
            $res['AzoneId'] = $this->azoneId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['DbInstanceStorage'])) {
            $model->dbInstanceStorage = $map['DbInstanceStorage'];
        }
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['AzoneId'])) {
            $model->azoneId = $map['AzoneId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
