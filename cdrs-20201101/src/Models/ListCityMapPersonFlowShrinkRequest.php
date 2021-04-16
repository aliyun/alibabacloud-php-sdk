<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class ListCityMapPersonFlowShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $originDataSourceIdListShrink;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $targetDataSourceIdListShrink;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $range;
    protected $_name = [
        'originDataSourceIdListShrink' => 'OriginDataSourceIdList',
        'pageNumber'                   => 'PageNumber',
        'pageSize'                     => 'PageSize',
        'targetDataSourceIdListShrink' => 'TargetDataSourceIdList',
        'endTime'                      => 'EndTime',
        'startTime'                    => 'StartTime',
        'range'                        => 'Range',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originDataSourceIdListShrink) {
            $res['OriginDataSourceIdList'] = $this->originDataSourceIdListShrink;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->targetDataSourceIdListShrink) {
            $res['TargetDataSourceIdList'] = $this->targetDataSourceIdListShrink;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->range) {
            $res['Range'] = $this->range;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCityMapPersonFlowShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OriginDataSourceIdList'])) {
            $model->originDataSourceIdListShrink = $map['OriginDataSourceIdList'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TargetDataSourceIdList'])) {
            $model->targetDataSourceIdListShrink = $map['TargetDataSourceIdList'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Range'])) {
            $model->range = $map['Range'];
        }

        return $model;
    }
}
