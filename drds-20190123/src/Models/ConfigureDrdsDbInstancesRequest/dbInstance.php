<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\ConfigureDrdsDbInstancesRequest;

use AlibabaCloud\Tea\Model;

class dbInstance extends Model
{
    /**
     * @var string
     */
    public $masterDbInstanceId;

    /**
     * @var string
     */
    public $slaveDbInstanceId;

    /**
     * @var string
     */
    public $slaveDbInstanceType;
    protected $_name = [
        'masterDbInstanceId'  => 'MasterDbInstanceId',
        'slaveDbInstanceId'   => 'SlaveDbInstanceId',
        'slaveDbInstanceType' => 'SlaveDbInstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->masterDbInstanceId) {
            $res['MasterDbInstanceId'] = $this->masterDbInstanceId;
        }
        if (null !== $this->slaveDbInstanceId) {
            $res['SlaveDbInstanceId'] = $this->slaveDbInstanceId;
        }
        if (null !== $this->slaveDbInstanceType) {
            $res['SlaveDbInstanceType'] = $this->slaveDbInstanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MasterDbInstanceId'])) {
            $model->masterDbInstanceId = $map['MasterDbInstanceId'];
        }
        if (isset($map['SlaveDbInstanceId'])) {
            $model->slaveDbInstanceId = $map['SlaveDbInstanceId'];
        }
        if (isset($map['SlaveDbInstanceType'])) {
            $model->slaveDbInstanceType = $map['SlaveDbInstanceType'];
        }

        return $model;
    }
}
