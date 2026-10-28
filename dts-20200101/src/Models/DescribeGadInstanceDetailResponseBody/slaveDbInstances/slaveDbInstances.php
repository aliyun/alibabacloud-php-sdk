<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeGadInstanceDetailResponseBody\slaveDbInstances;

use AlibabaCloud\Dara\Model;

class slaveDbInstances extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $dbInstanceId;

    /**
     * @var string
     */
    public $dbInstanceRegion;

    /**
     * @var string
     */
    public $dtsInstanceId;

    /**
     * @var string
     */
    public $syncArchitecture;
    protected $_name = [
        'createTime' => 'CreateTime',
        'dbInstanceId' => 'DbInstanceId',
        'dbInstanceRegion' => 'DbInstanceRegion',
        'dtsInstanceId' => 'DtsInstanceId',
        'syncArchitecture' => 'SyncArchitecture',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }

        if (null !== $this->dbInstanceRegion) {
            $res['DbInstanceRegion'] = $this->dbInstanceRegion;
        }

        if (null !== $this->dtsInstanceId) {
            $res['DtsInstanceId'] = $this->dtsInstanceId;
        }

        if (null !== $this->syncArchitecture) {
            $res['SyncArchitecture'] = $this->syncArchitecture;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }

        if (isset($map['DbInstanceRegion'])) {
            $model->dbInstanceRegion = $map['DbInstanceRegion'];
        }

        if (isset($map['DtsInstanceId'])) {
            $model->dtsInstanceId = $map['DtsInstanceId'];
        }

        if (isset($map['SyncArchitecture'])) {
            $model->syncArchitecture = $map['SyncArchitecture'];
        }

        return $model;
    }
}
