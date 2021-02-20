<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataPushResultRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $dataNames;

    /**
     * @var string
     */
    public $dataVersions;

    /**
     * @var string
     */
    public $minDate;

    /**
     * @var string
     */
    public $maxDate;

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
    public $regionIds;
    protected $_name = [
        'appId'        => 'AppId',
        'dataNames'    => 'DataNames',
        'dataVersions' => 'DataVersions',
        'minDate'      => 'MinDate',
        'maxDate'      => 'MaxDate',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'regionIds'    => 'RegionIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->dataNames) {
            $res['DataNames'] = $this->dataNames;
        }
        if (null !== $this->dataVersions) {
            $res['DataVersions'] = $this->dataVersions;
        }
        if (null !== $this->minDate) {
            $res['MinDate'] = $this->minDate;
        }
        if (null !== $this->maxDate) {
            $res['MaxDate'] = $this->maxDate;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionIds) {
            $res['RegionIds'] = $this->regionIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataPushResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DataNames'])) {
            $model->dataNames = $map['DataNames'];
        }
        if (isset($map['DataVersions'])) {
            $model->dataVersions = $map['DataVersions'];
        }
        if (isset($map['MinDate'])) {
            $model->minDate = $map['MinDate'];
        }
        if (isset($map['MaxDate'])) {
            $model->maxDate = $map['MaxDate'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionIds'])) {
            $model->regionIds = $map['RegionIds'];
        }

        return $model;
    }
}
