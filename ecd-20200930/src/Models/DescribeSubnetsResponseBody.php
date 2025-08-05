<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSubnetsResponseBody\subnets;

class DescribeSubnetsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var subnets[]
     */
    public $subnets;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'subnets' => 'Subnets',
    ];

    public function validate()
    {
        if (\is_array($this->subnets)) {
            Model::validateArray($this->subnets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->subnets) {
            if (\is_array($this->subnets)) {
                $res['Subnets'] = [];
                $n1 = 0;
                foreach ($this->subnets as $item1) {
                    $res['Subnets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Subnets'])) {
            if (!empty($map['Subnets'])) {
                $model->subnets = [];
                $n1 = 0;
                foreach ($map['Subnets'] as $item1) {
                    $model->subnets[$n1] = subnets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
