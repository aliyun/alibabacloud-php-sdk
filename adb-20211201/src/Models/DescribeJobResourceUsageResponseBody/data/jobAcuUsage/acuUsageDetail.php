<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeJobResourceUsageResponseBody\data\jobAcuUsage;

use AlibabaCloud\Tea\Model;

class acuUsageDetail extends Model
{
    /**
     * @description The number of ACUs for the elastic resources.
     *
     * @example 16ACU
     *
     * @var float
     */
    public $elasticAcuNumber;

    /**
     * @description The number of ACUs for the reserved resources.
     *
     * @example 16ACU
     *
     * @var float
     */
    public $reservedAcuNumber;

    /**
     * @example 16ACU
     *
     * @var float
     */
    public $spotAcuNumber;

    /**
     * @example 0.9
     *
     * @var float
     */
    public $spotAcuPercentage;

    /**
     * @description The total number of ACUs.
     *
     * @example 32ACU
     *
     * @var float
     */
    public $totalAcuNumber;
    protected $_name = [
        'elasticAcuNumber'  => 'ElasticAcuNumber',
        'reservedAcuNumber' => 'ReservedAcuNumber',
        'spotAcuNumber'     => 'SpotAcuNumber',
        'spotAcuPercentage' => 'SpotAcuPercentage',
        'totalAcuNumber'    => 'TotalAcuNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticAcuNumber) {
            $res['ElasticAcuNumber'] = $this->elasticAcuNumber;
        }
        if (null !== $this->reservedAcuNumber) {
            $res['ReservedAcuNumber'] = $this->reservedAcuNumber;
        }
        if (null !== $this->spotAcuNumber) {
            $res['SpotAcuNumber'] = $this->spotAcuNumber;
        }
        if (null !== $this->spotAcuPercentage) {
            $res['SpotAcuPercentage'] = $this->spotAcuPercentage;
        }
        if (null !== $this->totalAcuNumber) {
            $res['TotalAcuNumber'] = $this->totalAcuNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return acuUsageDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticAcuNumber'])) {
            $model->elasticAcuNumber = $map['ElasticAcuNumber'];
        }
        if (isset($map['ReservedAcuNumber'])) {
            $model->reservedAcuNumber = $map['ReservedAcuNumber'];
        }
        if (isset($map['SpotAcuNumber'])) {
            $model->spotAcuNumber = $map['SpotAcuNumber'];
        }
        if (isset($map['SpotAcuPercentage'])) {
            $model->spotAcuPercentage = $map['SpotAcuPercentage'];
        }
        if (isset($map['TotalAcuNumber'])) {
            $model->totalAcuNumber = $map['TotalAcuNumber'];
        }

        return $model;
    }
}
