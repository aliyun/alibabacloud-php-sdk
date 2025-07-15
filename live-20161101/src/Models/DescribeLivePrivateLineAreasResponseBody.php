<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePrivateLineAreasResponseBody\liveAreasList;
use AlibabaCloud\Tea\Model;

class DescribeLivePrivateLineAreasResponseBody extends Model
{
    /**
     * @description Details about the regions.
     *
     * @var liveAreasList
     */
    public $liveAreasList;

    /**
     * @description The request ID.
     *
     * @example C4865B85-664B-19D3-BB16-C62FB83C8226
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveAreasList' => 'LiveAreasList',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveAreasList) {
            $res['LiveAreasList'] = null !== $this->liveAreasList ? $this->liveAreasList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLivePrivateLineAreasResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveAreasList'])) {
            $model->liveAreasList = liveAreasList::fromMap($map['LiveAreasList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
