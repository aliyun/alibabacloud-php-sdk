<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class QueryActivityItemsRequest extends Model
{
    /**
     * @var int
     */
    public $activityId;

    /**
     * @var string
     */
    public $extendInfo;

    /**
     * @example 0
     *
     * @var int
     */
    public $floorIndex;

    /**
     * @var bool
     */
    public $mock;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $refresh;

    /**
     * @var string
     */
    public $umId;
    protected $_name = [
        'activityId' => 'ActivityId',
        'extendInfo' => 'ExtendInfo',
        'floorIndex' => 'FloorIndex',
        'mock'       => 'Mock',
        'pageIndex'  => 'PageIndex',
        'pageSize'   => 'PageSize',
        'refresh'    => 'Refresh',
        'umId'       => 'UmId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }
        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }
        if (null !== $this->floorIndex) {
            $res['FloorIndex'] = $this->floorIndex;
        }
        if (null !== $this->mock) {
            $res['Mock'] = $this->mock;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->refresh) {
            $res['Refresh'] = $this->refresh;
        }
        if (null !== $this->umId) {
            $res['UmId'] = $this->umId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryActivityItemsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }
        if (isset($map['FloorIndex'])) {
            $model->floorIndex = $map['FloorIndex'];
        }
        if (isset($map['Mock'])) {
            $model->mock = $map['Mock'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Refresh'])) {
            $model->refresh = $map['Refresh'];
        }
        if (isset($map['UmId'])) {
            $model->umId = $map['UmId'];
        }

        return $model;
    }
}
