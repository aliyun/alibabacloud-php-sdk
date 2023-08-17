<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeAppliedAdvicesRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * >  You can call the [DescribeDBClusters](~~129857~~) operation to query the IDs of Data Warehouse Edition (V3.0) clusters.
     * @example am-uf6g8w25jacm7****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The end date of the time range to query. Specify the date in the yyyyMMdd format. The date must be in UTC.
     *
     * @example 20220824
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The display language of the suggestion. Default value: zh. Valid values:
     *
     *   **zh**: simplified Chinese
     *   **en**: English
     *   **ja**: Japanese
     *   **zh-tw**: traditional Chinese
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of the page to return. The value must be an integer that is greater than 0. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 30. Valid values:
     *
     *   **30**
     *   **50**
     *   **100**
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the cluster.
     *
     * >  You can call the [DescribeRegions](~~143074~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The start date of the time range to query. Specify the date in the yyyyMMdd format. The date must be in UTC.
     *
     * @example 20220811
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'endTime'     => 'EndTime',
        'lang'        => 'Lang',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'regionId'    => 'RegionId',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppliedAdvicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
