<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopPolicysResponseBody\describeDesktopPolicys;
use AlibabaCloud\Tea\Model;

class DescribeDesktopPolicysResponseBody extends Model
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
     * @var describeDesktopPolicys[]
     */
    public $describeDesktopPolicys;
    protected $_name = [
        'nextToken'              => 'NextToken',
        'requestId'              => 'RequestId',
        'describeDesktopPolicys' => 'DescribeDesktopPolicys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->describeDesktopPolicys) {
            $res['DescribeDesktopPolicys'] = [];
            if (null !== $this->describeDesktopPolicys && \is_array($this->describeDesktopPolicys)) {
                $n = 0;
                foreach ($this->describeDesktopPolicys as $item) {
                    $res['DescribeDesktopPolicys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDesktopPolicysResponseBody
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
        if (isset($map['DescribeDesktopPolicys'])) {
            if (!empty($map['DescribeDesktopPolicys'])) {
                $model->describeDesktopPolicys = [];
                $n                             = 0;
                foreach ($map['DescribeDesktopPolicys'] as $item) {
                    $model->describeDesktopPolicys[$n++] = null !== $item ? describeDesktopPolicys::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
