<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserApiRequestResponseBody\requests;

class DescribeUserApiRequestResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var requests[]
     */
    public $requests;
    protected $_name = [
        'requestId' => 'RequestId',
        'requests' => 'Requests',
    ];

    public function validate()
    {
        if (\is_array($this->requests)) {
            Model::validateArray($this->requests);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->requests) {
            if (\is_array($this->requests)) {
                $res['Requests'] = [];
                $n1 = 0;
                foreach ($this->requests as $item1) {
                    $res['Requests'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['Requests'])) {
            if (!empty($map['Requests'])) {
                $model->requests = [];
                $n1 = 0;
                foreach ($map['Requests'] as $item1) {
                    $model->requests[$n1++] = requests::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
