<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDataSourceResponseBody\metaDatas;

class DescribeDataSourceResponseBody extends Model
{
    /**
     * @var metaDatas[]
     */
    public $metaDatas;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'metaDatas' => 'MetaDatas',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->metaDatas)) {
            Model::validateArray($this->metaDatas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metaDatas) {
            if (\is_array($this->metaDatas)) {
                $res['MetaDatas'] = [];
                $n1               = 0;
                foreach ($this->metaDatas as $item1) {
                    $res['MetaDatas'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MetaDatas'])) {
            if (!empty($map['MetaDatas'])) {
                $model->metaDatas = [];
                $n1               = 0;
                foreach ($map['MetaDatas'] as $item1) {
                    $model->metaDatas[$n1++] = metaDatas::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
