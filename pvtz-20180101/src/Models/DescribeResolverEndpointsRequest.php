<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class DescribeResolverEndpointsRequest extends Model
{
    /**
     * @description The keyword used to filter endpoints in %keyword% mode.
     *
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The language.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 20. Maximum value: 100.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The state of the endpoint that you want to query. If you do not specify this parameter, all endpoints are returned. Valid values:
     *
     *   SUCCESS: The endpoint works as expected.
     *   INIT: The endpoint is being created.
     *   FAILED: The endpoint fails to be created.
     *   CHANGE_INIT: The endpoint is being modified.
     *   CHANGE_FAILED: The endpoint fails to be modified.
     *   EXCEPTION: The endpoint encounters an exception.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
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
