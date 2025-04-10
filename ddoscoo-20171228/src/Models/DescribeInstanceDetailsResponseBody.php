<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstanceDetailsResponseBody\instanceDetails;

class DescribeInstanceDetailsResponseBody extends Model
{
    /**
     * @var instanceDetails[]
     */
    public $instanceDetails;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceDetails' => 'InstanceDetails',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceDetails)) {
            Model::validateArray($this->instanceDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceDetails) {
            if (\is_array($this->instanceDetails)) {
                $res['InstanceDetails'] = [];
                $n1 = 0;
                foreach ($this->instanceDetails as $item1) {
                    $res['InstanceDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceDetails'])) {
            if (!empty($map['InstanceDetails'])) {
                $model->instanceDetails = [];
                $n1 = 0;
                foreach ($map['InstanceDetails'] as $item1) {
                    $model->instanceDetails[$n1++] = instanceDetails::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
