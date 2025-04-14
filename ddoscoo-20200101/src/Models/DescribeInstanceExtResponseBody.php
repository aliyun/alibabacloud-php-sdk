<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceExtResponseBody\instanceExtSpecs;

class DescribeInstanceExtResponseBody extends Model
{
    /**
     * @var instanceExtSpecs[]
     */
    public $instanceExtSpecs;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'instanceExtSpecs' => 'InstanceExtSpecs',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->instanceExtSpecs)) {
            Model::validateArray($this->instanceExtSpecs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceExtSpecs) {
            if (\is_array($this->instanceExtSpecs)) {
                $res['InstanceExtSpecs'] = [];
                $n1 = 0;
                foreach ($this->instanceExtSpecs as $item1) {
                    $res['InstanceExtSpecs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['InstanceExtSpecs'])) {
            if (!empty($map['InstanceExtSpecs'])) {
                $model->instanceExtSpecs = [];
                $n1 = 0;
                foreach ($map['InstanceExtSpecs'] as $item1) {
                    $model->instanceExtSpecs[$n1++] = instanceExtSpecs::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
