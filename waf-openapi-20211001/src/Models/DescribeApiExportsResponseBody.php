<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApiExportsResponseBody\apiExports;

class DescribeApiExportsResponseBody extends Model
{
    /**
     * @var apiExports[]
     */
    public $apiExports;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'apiExports' => 'ApiExports',
        'requestId'  => 'RequestId',
        'total'      => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->apiExports)) {
            Model::validateArray($this->apiExports);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiExports) {
            if (\is_array($this->apiExports)) {
                $res['ApiExports'] = [];
                $n1                = 0;
                foreach ($this->apiExports as $item1) {
                    $res['ApiExports'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['ApiExports'])) {
            if (!empty($map['ApiExports'])) {
                $model->apiExports = [];
                $n1                = 0;
                foreach ($map['ApiExports'] as $item1) {
                    $model->apiExports[$n1++] = apiExports::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
