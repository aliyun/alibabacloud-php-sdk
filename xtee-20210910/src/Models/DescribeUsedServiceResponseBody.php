<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeUsedServiceResponseBody\records;

class DescribeUsedServiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var records[]
     */
    public $records;
    protected $_name = [
        'requestId' => 'RequestId',
        'records' => 'records',
    ];

    public function validate()
    {
        if (\is_array($this->records)) {
            Model::validateArray($this->records);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->records) {
            if (\is_array($this->records)) {
                $res['records'] = [];
                $n1 = 0;
                foreach ($this->records as $item1) {
                    $res['records'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['records'])) {
            if (!empty($map['records'])) {
                $model->records = [];
                $n1 = 0;
                foreach ($map['records'] as $item1) {
                    $model->records[$n1] = records::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
