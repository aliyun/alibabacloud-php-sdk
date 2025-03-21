<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListImagesResponseBody\images;
use AlibabaCloud\Tea\Model;

class ListImagesResponseBody extends Model
{
    /**
     * @description Image details
     *
     * @var images[]
     */
    public $images;

    /**
     * @description NextToken for the next page, include this value when requesting the next page
     *
     * @example 3a6b93229825ac667104463b56790c91
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Id of the request
     *
     * @example 0FC4A1C7-421C-5EAB-9361-4C0338EFA287
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'images' => 'Images',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->images) {
            $res['Images'] = [];
            if (null !== $this->images && \is_array($this->images)) {
                $n = 0;
                foreach ($this->images as $item) {
                    $res['Images'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListImagesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = [];
                $n = 0;
                foreach ($map['Images'] as $item) {
                    $model->images[$n++] = null !== $item ? images::fromMap($item) : $item;
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
