<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class DescribeRdsDrdsDBRequest extends Model
{
    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string[]
     */
    public $rdsInstanceId;
    protected $_name = [
        'drdsInstanceId' => 'DrdsInstanceId',
        'rdsInstanceId'  => 'RdsInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return DescribeRdsDrdsDBRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['RdsInstanceId'])) {
            if (!empty($map['RdsInstanceId'])) {
                $model->rdsInstanceId = $map['RdsInstanceId'];
            }
        }

        return $model;
    }
}
