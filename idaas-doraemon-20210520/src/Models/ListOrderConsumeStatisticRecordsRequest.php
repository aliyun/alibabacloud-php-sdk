<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\Tea\Model;

class ListOrderConsumeStatisticRecordsRequest extends Model
{
    /**
     * @example 211283925690732
     *
     * @var string
     */
    public $aliOrderCode;

    /**
     * @var string
     */
    public $applicationExternalId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @example 2022-05-31
     *
     * @var string
     */
    public $statisticTimeMax;

    /**
     * @example 2022-05-31
     *
     * @var string
     */
    public $statisticTimeMin;
    protected $_name = [
        'aliOrderCode'          => 'AliOrderCode',
        'applicationExternalId' => 'ApplicationExternalId',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'serviceCode'           => 'ServiceCode',
        'statisticTimeMax'      => 'StatisticTimeMax',
        'statisticTimeMin'      => 'StatisticTimeMin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliOrderCode) {
            $res['AliOrderCode'] = $this->aliOrderCode;
        }
        if (null !== $this->applicationExternalId) {
            $res['ApplicationExternalId'] = $this->applicationExternalId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->statisticTimeMax) {
            $res['StatisticTimeMax'] = $this->statisticTimeMax;
        }
        if (null !== $this->statisticTimeMin) {
            $res['StatisticTimeMin'] = $this->statisticTimeMin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOrderConsumeStatisticRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliOrderCode'])) {
            $model->aliOrderCode = $map['AliOrderCode'];
        }
        if (isset($map['ApplicationExternalId'])) {
            $model->applicationExternalId = $map['ApplicationExternalId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['StatisticTimeMax'])) {
            $model->statisticTimeMax = $map['StatisticTimeMax'];
        }
        if (isset($map['StatisticTimeMin'])) {
            $model->statisticTimeMin = $map['StatisticTimeMin'];
        }

        return $model;
    }
}
