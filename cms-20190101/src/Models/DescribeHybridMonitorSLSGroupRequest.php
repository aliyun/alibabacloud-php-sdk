<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeHybridMonitorSLSGroupRequest extends Model
{
    /**
     * @description The number of the page to return.
     *
     * Pages start from page 1. Default value: 1.
     * @example Logstore
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The timestamp that was generated when the Logstore group was created.
     *
     * Unit: milliseconds.
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call is successful.
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The operation that you want to perform. Set the value to **DescribeHybridMonitorSLSGroup**.
     *
     * @example Logstore_test
     *
     * @var string
     */
    public $SLSGroupName;
    protected $_name = [
        'keyword'      => 'Keyword',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'regionId'     => 'RegionId',
        'SLSGroupName' => 'SLSGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
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
        if (null !== $this->SLSGroupName) {
            $res['SLSGroupName'] = $this->SLSGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHybridMonitorSLSGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
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
        if (isset($map['SLSGroupName'])) {
            $model->SLSGroupName = $map['SLSGroupName'];
        }

        return $model;
    }
}
