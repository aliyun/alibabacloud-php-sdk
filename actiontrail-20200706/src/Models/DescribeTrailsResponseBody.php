<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeTrailsResponseBody\trailList;
use AlibabaCloud\Tea\Model;

class DescribeTrailsResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example ED8BC689-69DA-42AC-855E-3B06C1271194
     *
     * @var string
     */
    public $requestId;

    /**
     * @description A list of returned trails.
     *
     * @var trailList[]
     */
    public $trailList;
    protected $_name = [
        'requestId' => 'RequestId',
        'trailList' => 'TrailList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->trailList) {
            $res['TrailList'] = [];
            if (null !== $this->trailList && \is_array($this->trailList)) {
                $n = 0;
                foreach ($this->trailList as $item) {
                    $res['TrailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTrailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TrailList'])) {
            if (!empty($map['TrailList'])) {
                $model->trailList = [];
                $n                = 0;
                foreach ($map['TrailList'] as $item) {
                    $model->trailList[$n++] = null !== $item ? trailList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
