<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeJobResourceUsageResponseBody\data\jobAcuUsage;

use AlibabaCloud\Dara\Model;

class acuUsageDetail extends Model
{
    /**
     * @var float
     */
    public $elasticAcuNumber;
    /**
     * @var float
     */
    public $reservedAcuNumber;
    /**
     * @var float
     */
    public $spotAcuNumber;
    /**
     * @var float
     */
    public $spotAcuPercentage;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
