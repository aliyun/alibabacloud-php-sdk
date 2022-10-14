<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetSwimLaneGroupListResponseBody\swimLaneGroupList;
use AlibabaCloud\Tea\Model;

class GetSwimLaneGroupListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var swimLaneGroupList[]
     */
    public $swimLaneGroupList;
    protected $_name = [
        'requestId'         => 'RequestId',
        'swimLaneGroupList' => 'SwimLaneGroupList',
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
        if (null !== $this->swimLaneGroupList) {
            $res['SwimLaneGroupList'] = [];
            if (null !== $this->swimLaneGroupList && \is_array($this->swimLaneGroupList)) {
                $n = 0;
                foreach ($this->swimLaneGroupList as $item) {
                    $res['SwimLaneGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSwimLaneGroupListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SwimLaneGroupList'])) {
            if (!empty($map['SwimLaneGroupList'])) {
                $model->swimLaneGroupList = [];
                $n                        = 0;
                foreach ($map['SwimLaneGroupList'] as $item) {
                    $model->swimLaneGroupList[$n++] = null !== $item ? swimLaneGroupList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
