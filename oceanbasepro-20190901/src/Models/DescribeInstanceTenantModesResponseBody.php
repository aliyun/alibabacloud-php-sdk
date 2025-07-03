<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class DescribeInstanceTenantModesResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $instanceModes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceModes' => 'InstanceModes',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceModes)) {
            Model::validateArray($this->instanceModes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceModes) {
            if (\is_array($this->instanceModes)) {
                $res['InstanceModes'] = [];
                $n1 = 0;
                foreach ($this->instanceModes as $item1) {
                    $res['InstanceModes'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['InstanceModes'])) {
            if (!empty($map['InstanceModes'])) {
                $model->instanceModes = [];
                $n1 = 0;
                foreach ($map['InstanceModes'] as $item1) {
                    $model->instanceModes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
