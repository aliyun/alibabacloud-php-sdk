<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSubnetsResponseBody\subnets;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subnets) {
            $res['Subnets'] = [];
            if (null !== $this->subnets && \is_array($this->subnets)) {
                $n = 0;
                foreach ($this->subnets as $item) {
                    $res['Subnets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSubnetsResponseBody
     */
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
                $n = 0;
                foreach ($map['Subnets'] as $item) {
                    $model->subnets[$n++] = null !== $item ? subnets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
