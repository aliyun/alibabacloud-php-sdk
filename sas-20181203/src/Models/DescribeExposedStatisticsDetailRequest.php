<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeExposedStatisticsDetailRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $statisticsType;

    /**
     * @var string
     */
    public $statisticsTypeGatewayType;

    /**
     * @var string
     */
    public $statisticsTypeInstanceValue;
    protected $_name = [
        'currentPage'                 => 'CurrentPage',
        'pageSize'                    => 'PageSize',
        'statisticsType'              => 'StatisticsType',
        'statisticsTypeGatewayType'   => 'StatisticsTypeGatewayType',
        'statisticsTypeInstanceValue' => 'StatisticsTypeInstanceValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->statisticsType) {
            $res['StatisticsType'] = $this->statisticsType;
        }
        if (null !== $this->statisticsTypeGatewayType) {
            $res['StatisticsTypeGatewayType'] = $this->statisticsTypeGatewayType;
        }
        if (null !== $this->statisticsTypeInstanceValue) {
            $res['StatisticsTypeInstanceValue'] = $this->statisticsTypeInstanceValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExposedStatisticsDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StatisticsType'])) {
            $model->statisticsType = $map['StatisticsType'];
        }
        if (isset($map['StatisticsTypeGatewayType'])) {
            $model->statisticsTypeGatewayType = $map['StatisticsTypeGatewayType'];
        }
        if (isset($map['StatisticsTypeInstanceValue'])) {
            $model->statisticsTypeInstanceValue = $map['StatisticsTypeInstanceValue'];
        }

        return $model;
    }
}
