<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models;

use AlibabaCloud\Tea\Model;

class GetAttackedAssetDealRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example month
     *
     * @var string
     */
    public $dateType;

    /**
     * @description This parameter is required.
     *
     * @example 1732268720000
     *
     * @var int
     */
    public $endDate;

    /**
     * @description This parameter is required.
     *
     * @example 1732268720000
     *
     * @var int
     */
    public $startDate;

    /**
     * @var string
     */
    public $suspEventSource;
    protected $_name = [
        'dateType'        => 'DateType',
        'endDate'         => 'EndDate',
        'startDate'       => 'StartDate',
        'suspEventSource' => 'SuspEventSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dateType) {
            $res['DateType'] = $this->dateType;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->suspEventSource) {
            $res['SuspEventSource'] = $this->suspEventSource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAttackedAssetDealRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DateType'])) {
            $model->dateType = $map['DateType'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['SuspEventSource'])) {
            $model->suspEventSource = $map['SuspEventSource'];
        }

        return $model;
    }
}
