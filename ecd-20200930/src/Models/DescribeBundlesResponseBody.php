<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeBundlesResponseBody\bundles;
use AlibabaCloud\Tea\Model;

class DescribeBundlesResponseBody extends Model
{
    /**
     * @description The details of the queried cloud computer templates.
     *
     * @var bundles[]
     */
    public $bundles;

    /**
     * @description The token that is used for the next query. If this parameter is empty, all results have been returned.
     *
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6lu3PTF6h3zE8egwlYuv8M8
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example BCC854D8-5D1E-46D3-96EF-797A5DD36789
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bundles'   => 'Bundles',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bundles) {
            $res['Bundles'] = [];
            if (null !== $this->bundles && \is_array($this->bundles)) {
                $n = 0;
                foreach ($this->bundles as $item) {
                    $res['Bundles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBundlesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bundles'])) {
            if (!empty($map['Bundles'])) {
                $model->bundles = [];
                $n              = 0;
                foreach ($map['Bundles'] as $item) {
                    $model->bundles[$n++] = null !== $item ? bundles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
