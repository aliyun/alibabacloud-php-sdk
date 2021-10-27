<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class DescribeRdsReadOnlyRequest extends Model
{
    /**
     * @var string
     */
    public $dbInstType;

    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string
     */
    public $rdsInstanceId;
    protected $_name = [
        'dbInstType'     => 'DbInstType',
        'drdsInstanceId' => 'DrdsInstanceId',
        'rdsInstanceId'  => 'RdsInstanceId',
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
        if (null !== $this->rdsInstanceId) {
            $res['RdsInstanceId'] = $this->rdsInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRdsReadOnlyRequest
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
        if (isset($map['RdsInstanceId'])) {
            $model->rdsInstanceId = $map['RdsInstanceId'];
        }

        return $model;
    }
}
