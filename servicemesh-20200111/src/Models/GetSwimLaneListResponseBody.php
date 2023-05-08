<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetSwimLaneListResponseBody\swimLaneList;
use AlibabaCloud\Tea\Model;

class GetSwimLaneListResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example yyyy
     *
     * @var string
     */
    public $requestId;

    /**
     * @description A list of all the lanes in the lane group.
     *
     * @var swimLaneList[]
     */
    public $swimLaneList;
    protected $_name = [
        'requestId'    => 'RequestId',
        'swimLaneList' => 'SwimLaneList',
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
        if (null !== $this->swimLaneList) {
            $res['SwimLaneList'] = [];
            if (null !== $this->swimLaneList && \is_array($this->swimLaneList)) {
                $n = 0;
                foreach ($this->swimLaneList as $item) {
                    $res['SwimLaneList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSwimLaneListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SwimLaneList'])) {
            if (!empty($map['SwimLaneList'])) {
                $model->swimLaneList = [];
                $n                   = 0;
                foreach ($map['SwimLaneList'] as $item) {
                    $model->swimLaneList[$n++] = null !== $item ? swimLaneList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
