<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\QueryEndPointListResponseBody\endPointList;
use AlibabaCloud\Tea\Model;

class QueryEndPointListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var endPointList[]
     */
    public $endPointList;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'requestId'    => 'RequestId',
        'endPointList' => 'EndPointList',
        'regionId'     => 'RegionId',
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
        if (null !== $this->endPointList) {
            $res['EndPointList'] = [];
            if (null !== $this->endPointList && \is_array($this->endPointList)) {
                $n = 0;
                foreach ($this->endPointList as $item) {
                    $res['EndPointList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryEndPointListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EndPointList'])) {
            if (!empty($map['EndPointList'])) {
                $model->endPointList = [];
                $n                   = 0;
                foreach ($map['EndPointList'] as $item) {
                    $model->endPointList[$n++] = null !== $item ? endPointList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
