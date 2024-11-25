<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class DescribeResolverEndpointsRequest extends Model
{
    /**
     * @description The keyword of the endpoint name, which is used for fuzzy searches.
     *
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * Default value: en.
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The state of the endpoint that you want to query. Valid values:
     *
     *   SUCCESS: The endpoint works as expected.
     *   INIT: The endpoint is being created.
     *   FAILED: The endpoint failed to be created.
     *   CHANGE_INIT: The endpoint is being modified.
     *   CHANGE_FAILED: The endpoint failed to be modified.
     *   EXCEPTION: The endpoint encountered an exception.
     *
     * >  If you do not specify this parameter, endpoints in all states are returned.
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @description The region ID of the outbound virtual private cloud (VPC).
     *
     * @example cn-zhangjiakou
     *
     * @var string
     */
    public $vpcRegionId;
    protected $_name = [
        'keyword'     => 'Keyword',
        'lang'        => 'Lang',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'status'      => 'Status',
        'vpcRegionId' => 'VpcRegionId',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpcRegionId) {
            $res['VpcRegionId'] = $this->vpcRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResolverEndpointsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcRegionId'])) {
            $model->vpcRegionId = $map['VpcRegionId'];
        }

        return $model;
    }
}
