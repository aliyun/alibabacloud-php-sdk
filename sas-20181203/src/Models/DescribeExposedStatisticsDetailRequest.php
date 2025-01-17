<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

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
     * @var int
     */
    public $resourceDirectoryAccountId;
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
        'resourceDirectoryAccountId'  => 'ResourceDirectoryAccountId',
        'statisticsType'              => 'StatisticsType',
        'statisticsTypeGatewayType'   => 'StatisticsTypeGatewayType',
        'statisticsTypeInstanceValue' => 'StatisticsTypeInstanceValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
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
