<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;

class DescribeDBInstanceSpecInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $CPU;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $memory;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'CPU' => 'CPU',
        'description' => 'Description',
        'memory' => 'Memory',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
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
        if (isset($map['CPU'])) {
            $model->CPU = $map['CPU'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
