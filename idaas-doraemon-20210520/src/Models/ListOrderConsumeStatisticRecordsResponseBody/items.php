<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListOrderConsumeStatisticRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 23567876823
     *
     * @var string
     */
    public $aliOrderCode;

    /**
     * @example sms_auth
     *
     * @var string
     */
    public $applicationExternalId;

    /**
     * @example 1
     *
     * @var int
     */
    public $chargedCount;

    /**
     * @example SMS
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @example 1655388050
     *
     * @var int
     */
    public $statisticTime;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalPrice;

    /**
     * @example 10
     *
     * @var int
     */
    public $unitPrice;
    protected $_name = [
        'aliOrderCode'          => 'AliOrderCode',
        'applicationExternalId' => 'ApplicationExternalId',
        'chargedCount'          => 'ChargedCount',
        'serviceCode'           => 'ServiceCode',
        'statisticTime'         => 'StatisticTime',
        'totalPrice'            => 'TotalPrice',
        'unitPrice'             => 'UnitPrice',
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
        if (null !== $this->chargedCount) {
            $res['ChargedCount'] = $this->chargedCount;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->statisticTime) {
            $res['StatisticTime'] = $this->statisticTime;
        }
        if (null !== $this->totalPrice) {
            $res['TotalPrice'] = $this->totalPrice;
        }
        if (null !== $this->unitPrice) {
            $res['UnitPrice'] = $this->unitPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
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
        if (isset($map['ChargedCount'])) {
            $model->chargedCount = $map['ChargedCount'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['StatisticTime'])) {
            $model->statisticTime = $map['StatisticTime'];
        }
        if (isset($map['TotalPrice'])) {
            $model->totalPrice = $map['TotalPrice'];
        }
        if (isset($map['UnitPrice'])) {
            $model->unitPrice = $map['UnitPrice'];
        }

        return $model;
    }
}
