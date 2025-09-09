<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Dara\Model;

class DescribeRdsSuperAccountInstancesRequest extends Model
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
     * @var string[]
     */
    public $rdsInstance;
    protected $_name = [
        'dbInstType' => 'DbInstType',
        'drdsInstanceId' => 'DrdsInstanceId',
        'rdsInstance' => 'RdsInstance',
    ];

    public function validate()
    {
        if (\is_array($this->rdsInstance)) {
            Model::validateArray($this->rdsInstance);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbInstType) {
            $res['DbInstType'] = $this->dbInstType;
        }

        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }

        if (null !== $this->rdsInstance) {
            if (\is_array($this->rdsInstance)) {
                $res['RdsInstance'] = [];
                $n1 = 0;
                foreach ($this->rdsInstance as $item1) {
                    $res['RdsInstance'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DbInstType'])) {
            $model->dbInstType = $map['DbInstType'];
        }

        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }

        if (isset($map['RdsInstance'])) {
            if (!empty($map['RdsInstance'])) {
                $model->rdsInstance = [];
                $n1 = 0;
                foreach ($map['RdsInstance'] as $item1) {
                    $model->rdsInstance[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
