<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeExposedStatisticsDetailRequest extends Model
{
    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of entries to return on each page. Default value: 20. If you leave this parameter empty, 20 entries are returned on each page.
     *
     * >  We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of the exposed asset. Valid values:
     *
     *   **exposureType**: gateway assets
     *   **exposurePort**: ports
     *   **exposureComponent**: system components
     *   **exposureIp**: IP addresses
     *
     * @example exposureType
     *
     * @var string
     */
    public $statisticsType;

    /**
     * @description The type of the gateway asset. This parameter is required when the **StatisticsType** parameter is set to **exposureType**. Valid values:
     *
     *   **SLB**: the public IP address of a Server Load Balancer (SLB) instance
     *   **DNAT**: the NAT gateway that connects to the Internet by using the DNAT feature
     *
     * @example SLB
     *
     * @var string
     */
    public $statisticsTypeGatewayType;

    /**
     * @description The ID of the gateway asset. This parameter is required when the **StatisticsType** parameter is set to **exposureType**.
     *
     * @example lb-2ze4rso39h4nczcqs****
     *
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
