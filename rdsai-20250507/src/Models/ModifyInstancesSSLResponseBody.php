<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class ModifyInstancesSSLResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $instanceNames;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceNames' => 'InstanceNames',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceNames)) {
            Model::validateArray($this->instanceNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceNames) {
            if (\is_array($this->instanceNames)) {
                $res['InstanceNames'] = [];
                $n1 = 0;
                foreach ($this->instanceNames as $item1) {
                    $res['InstanceNames'][$n1] = $item1;
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
        if (isset($map['InstanceNames'])) {
            if (!empty($map['InstanceNames'])) {
                $model->instanceNames = [];
                $n1 = 0;
                foreach ($map['InstanceNames'] as $item1) {
                    $model->instanceNames[$n1] = $item1;
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
