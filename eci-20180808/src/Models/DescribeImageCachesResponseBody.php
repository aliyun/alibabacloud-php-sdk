<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeImageCachesResponseBody\imageCaches;
use AlibabaCloud\Tea\Model;

class DescribeImageCachesResponseBody extends Model
{
    /**
     * @description The information about image caches.
     *
     * @var imageCaches[]
     */
    public $imageCaches;

    /**
     * @description The returned value of NextToken is a pagination token, which can be used in the next request to retrieve a new page of results.
     *
     * @example AAAAAdDWBF2****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 39FC2E43-3DD7-4CEF-9EF4-E4AD6E635301
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 15
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'imageCaches' => 'ImageCaches',
        'nextToken'   => 'NextToken',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageCaches) {
            $res['ImageCaches'] = [];
            if (null !== $this->imageCaches && \is_array($this->imageCaches)) {
                $n = 0;
                foreach ($this->imageCaches as $item) {
                    $res['ImageCaches'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageCachesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageCaches'])) {
            if (!empty($map['ImageCaches'])) {
                $model->imageCaches = [];
                $n                  = 0;
                foreach ($map['ImageCaches'] as $item) {
                    $model->imageCaches[$n++] = null !== $item ? imageCaches::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
