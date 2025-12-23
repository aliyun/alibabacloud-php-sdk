<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceEndpointsResponseBody\DBInstanceEndpoints;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceEndpointsResponseBody\instanceEndpoints;

class DescribeInstanceEndpointsResponseBody extends Model
{
    /**
     * @var DBInstanceEndpoints[]
     */
    public $DBInstanceEndpoints;

    /**
     * @var instanceEndpoints[]
     */
    public $instanceEndpoints;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceEndpoints' => 'DBInstanceEndpoints',
        'instanceEndpoints' => 'InstanceEndpoints',
        'instanceName' => 'InstanceName',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->DBInstanceEndpoints)) {
            Model::validateArray($this->DBInstanceEndpoints);
        }
        if (\is_array($this->instanceEndpoints)) {
            Model::validateArray($this->instanceEndpoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceEndpoints) {
            if (\is_array($this->DBInstanceEndpoints)) {
                $res['DBInstanceEndpoints'] = [];
                $n1 = 0;
                foreach ($this->DBInstanceEndpoints as $item1) {
                    $res['DBInstanceEndpoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceEndpoints) {
            if (\is_array($this->instanceEndpoints)) {
                $res['InstanceEndpoints'] = [];
                $n1 = 0;
                foreach ($this->instanceEndpoints as $item1) {
                    $res['InstanceEndpoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DBInstanceEndpoints'])) {
            if (!empty($map['DBInstanceEndpoints'])) {
                $model->DBInstanceEndpoints = [];
                $n1 = 0;
                foreach ($map['DBInstanceEndpoints'] as $item1) {
                    $model->DBInstanceEndpoints[$n1] = DBInstanceEndpoints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceEndpoints'])) {
            if (!empty($map['InstanceEndpoints'])) {
                $model->instanceEndpoints = [];
                $n1 = 0;
                foreach ($map['InstanceEndpoints'] as $item1) {
                    $model->instanceEndpoints[$n1] = instanceEndpoints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
