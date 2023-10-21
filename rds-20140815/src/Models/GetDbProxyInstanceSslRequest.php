<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class GetDbProxyInstanceSslRequest extends Model
{
    /**
     * @description A reserved parameter. You do not need to specify this parameter.
     *
     * @example normal
     *
     * @var string
     */
    public $DBProxyEngineType;

    /**
     * @description The instance ID. You can call the [DescribeDBInstances](~~610396~~) operation to query the ID of the instance.
     *
     * @example rm-t4n3axxxxx
     *
     * @var string
     */
    public $dbInstanceId;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~610399~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBProxyEngineType' => 'DBProxyEngineType',
        'dbInstanceId'      => 'DbInstanceId',
        'regionId'          => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBProxyEngineType) {
            $res['DBProxyEngineType'] = $this->DBProxyEngineType;
        }
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDbProxyInstanceSslRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBProxyEngineType'])) {
            $model->DBProxyEngineType = $map['DBProxyEngineType'];
        }
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
