<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO\polarOrderDOList;

use AlibabaCloud\Dara\Model;

class polarOrderDOList extends Model
{
    /**
     * @var string
     */
    public $azoneId;

    /**
     * @var string
     */
    public $dbInstanceStorage;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $network;

    /**
     * @var int
     */
    public $num;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'azoneId' => 'AzoneId',
        'dbInstanceStorage' => 'DbInstanceStorage',
        'engine' => 'Engine',
        'instanceClass' => 'InstanceClass',
        'network' => 'Network',
        'num' => 'Num',
        'regionId' => 'RegionId',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
