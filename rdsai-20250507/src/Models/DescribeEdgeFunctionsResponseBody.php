<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeEdgeFunctionsResponseBody\edgeFunctions;

class DescribeEdgeFunctionsResponseBody extends Model
{
    /**
     * @var edgeFunctions[]
     */
    public $edgeFunctions;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'edgeFunctions' => 'EdgeFunctions',
        'instanceName' => 'InstanceName',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->edgeFunctions)) {
            Model::validateArray($this->edgeFunctions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->edgeFunctions) {
            if (\is_array($this->edgeFunctions)) {
                $res['EdgeFunctions'] = [];
                $n1 = 0;
                foreach ($this->edgeFunctions as $item1) {
                    $res['EdgeFunctions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EdgeFunctions'])) {
            if (!empty($map['EdgeFunctions'])) {
                $model->edgeFunctions = [];
                $n1 = 0;
                foreach ($map['EdgeFunctions'] as $item1) {
                    $model->edgeFunctions[$n1] = edgeFunctions::fromMap($item1);
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
