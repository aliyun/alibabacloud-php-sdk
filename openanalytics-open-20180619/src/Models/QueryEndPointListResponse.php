<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\QueryEndPointListResponse\endPointList;
use AlibabaCloud\Tea\Model;

class QueryEndPointListResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var endPointList[]
     */
    public $endPointList;
    protected $_name = [
        'requestId'    => 'RequestId',
        'regionId'     => 'RegionId',
        'endPointList' => 'EndPointList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('endPointList', $this->endPointList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryEndPointListResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

        return $model;
    }
}
