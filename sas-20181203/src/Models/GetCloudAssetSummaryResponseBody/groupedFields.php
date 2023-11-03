<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCloudAssetSummaryResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCloudAssetSummaryResponseBody\groupedFields\cloudAssetSummaryMetas;
use AlibabaCloud\Tea\Model;

class groupedFields extends Model
{
    /**
     * @description The statistics of cloud services.
     *
     * @var cloudAssetSummaryMetas[]
     */
    public $cloudAssetSummaryMetas;

    /**
     * @example 919
     *
     * @var int
     */
    public $instanceCountTotal;

    /**
     * @example 544
     *
     * @var int
     */
    public $instanceRiskCountTotal;
    protected $_name = [
        'cloudAssetSummaryMetas' => 'CloudAssetSummaryMetas',
        'instanceCountTotal'     => 'InstanceCountTotal',
        'instanceRiskCountTotal' => 'InstanceRiskCountTotal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudAssetSummaryMetas) {
            $res['CloudAssetSummaryMetas'] = [];
            if (null !== $this->cloudAssetSummaryMetas && \is_array($this->cloudAssetSummaryMetas)) {
                $n = 0;
                foreach ($this->cloudAssetSummaryMetas as $item) {
                    $res['CloudAssetSummaryMetas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceCountTotal) {
            $res['InstanceCountTotal'] = $this->instanceCountTotal;
        }
        if (null !== $this->instanceRiskCountTotal) {
            $res['InstanceRiskCountTotal'] = $this->instanceRiskCountTotal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupedFields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudAssetSummaryMetas'])) {
            if (!empty($map['CloudAssetSummaryMetas'])) {
                $model->cloudAssetSummaryMetas = [];
                $n                             = 0;
                foreach ($map['CloudAssetSummaryMetas'] as $item) {
                    $model->cloudAssetSummaryMetas[$n++] = null !== $item ? cloudAssetSummaryMetas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceCountTotal'])) {
            $model->instanceCountTotal = $map['InstanceCountTotal'];
        }
        if (isset($map['InstanceRiskCountTotal'])) {
            $model->instanceRiskCountTotal = $map['InstanceRiskCountTotal'];
        }

        return $model;
    }
}
