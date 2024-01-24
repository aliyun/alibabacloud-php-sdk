<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class DescribeRdsSuperAccountInstancesRequest extends Model
{
    /**
     * @description The type of the ApsaraDB RDS for MySQL instances. Default value: **RDS**.
     *
     * @example RDS
     *
     * @var string
     */
    public $dbInstType;

    /**
     * @description The ID of the PolarDB-X 1.0 instance.
     *
     * @example drds************
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @example [\"rm-*****************\",\"rm-*****************\"]
     *
     * @var string[]
     */
    public $rdsInstance;
    protected $_name = [
        'dbInstType'     => 'DbInstType',
        'drdsInstanceId' => 'DrdsInstanceId',
        'rdsInstance'    => 'RdsInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbInstType) {
            $res['DbInstType'] = $this->dbInstType;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->rdsInstance) {
            $res['RdsInstance'] = $this->rdsInstance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRdsSuperAccountInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbInstType'])) {
            $model->dbInstType = $map['DbInstType'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['RdsInstance'])) {
            if (!empty($map['RdsInstance'])) {
                $model->rdsInstance = $map['RdsInstance'];
            }
        }

        return $model;
    }
}
