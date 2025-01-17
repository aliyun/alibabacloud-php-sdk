<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCanFixVulListResponseBody\vulRecords;

class DescribeCanFixVulListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var vulRecords[]
     */
    public $vulRecords;
    protected $_name = [
        'requestId'  => 'RequestId',
        'vulRecords' => 'VulRecords',
    ];

    public function validate()
    {
        if (\is_array($this->vulRecords)) {
            Model::validateArray($this->vulRecords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->vulRecords) {
            if (\is_array($this->vulRecords)) {
                $res['VulRecords'] = [];
                $n1                = 0;
                foreach ($this->vulRecords as $item1) {
                    $res['VulRecords'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['VulRecords'])) {
            if (!empty($map['VulRecords'])) {
                $model->vulRecords = [];
                $n1                = 0;
                foreach ($map['VulRecords'] as $item1) {
                    $model->vulRecords[$n1++] = vulRecords::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
