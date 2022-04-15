<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\AppliedNearRealStatResponseBody\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @description 应用ID
     *
     * @var string
     */
    public $appliedId;

    /**
     * @description 应用名称
     *
     * @var string
     */
    public $appliedName;

    /**
     * @description 应用版本ID
     *
     * @var string
     */
    public $appliedVersionId;

    /**
     * @description 应用版本名称
     *
     * @var string
     */
    public $appliedVersionName;

    /**
     * @description 实时消耗并发
     *
     * @var int
     */
    public $concurrency;

    /**
     * @description 实时消耗CU
     *
     * @var float
     */
    public $consumptionCu;
    protected $_name = [
        'appliedId'          => 'AppliedId',
        'appliedName'        => 'AppliedName',
        'appliedVersionId'   => 'AppliedVersionId',
        'appliedVersionName' => 'AppliedVersionName',
        'concurrency'        => 'Concurrency',
        'consumptionCu'      => 'ConsumptionCu',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appliedId) {
            $res['AppliedId'] = $this->appliedId;
        }
        if (null !== $this->appliedName) {
            $res['AppliedName'] = $this->appliedName;
        }
        if (null !== $this->appliedVersionId) {
            $res['AppliedVersionId'] = $this->appliedVersionId;
        }
        if (null !== $this->appliedVersionName) {
            $res['AppliedVersionName'] = $this->appliedVersionName;
        }
        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }
        if (null !== $this->consumptionCu) {
            $res['ConsumptionCu'] = $this->consumptionCu;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppliedId'])) {
            $model->appliedId = $map['AppliedId'];
        }
        if (isset($map['AppliedName'])) {
            $model->appliedName = $map['AppliedName'];
        }
        if (isset($map['AppliedVersionId'])) {
            $model->appliedVersionId = $map['AppliedVersionId'];
        }
        if (isset($map['AppliedVersionName'])) {
            $model->appliedVersionName = $map['AppliedVersionName'];
        }
        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }
        if (isset($map['ConsumptionCu'])) {
            $model->consumptionCu = $map['ConsumptionCu'];
        }

        return $model;
    }
}
