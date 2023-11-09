<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class DescribeSmartStatisticsPageListRequest extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $currentPage;

    /**
     * @example 2022-11-16 23:59:59 +0800
     *
     * @var string
     */
    public $endDate;

    /**
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example 36**01
     *
     * @var string
     */
    public $sceneId;

    /**
     * @example cloudauthst
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @example 2023-11-01 00:00:00 +0800
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'endDate'     => 'EndDate',
        'pageSize'    => 'PageSize',
        'sceneId'     => 'SceneId',
        'serviceCode' => 'ServiceCode',
        'startDate'   => 'StartDate',
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
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSmartStatisticsPageListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
