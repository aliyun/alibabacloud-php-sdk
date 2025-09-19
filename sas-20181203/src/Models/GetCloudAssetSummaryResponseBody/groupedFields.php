<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCloudAssetSummaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCloudAssetSummaryResponseBody\groupedFields\cloudAssetSummaryMetas;

class groupedFields extends Model
{
    /**
     * @var cloudAssetSummaryMetas[]
     */
    public $cloudAssetSummaryMetas;

    /**
     * @var int
     */
    public $instanceCountTotal;

    /**
     * @var int
     */
    public $instanceRiskCountTotal;
    protected $_name = [
        'cloudAssetSummaryMetas' => 'CloudAssetSummaryMetas',
        'instanceCountTotal' => 'InstanceCountTotal',
        'instanceRiskCountTotal' => 'InstanceRiskCountTotal',
    ];

    public function validate()
    {
        if (\is_array($this->cloudAssetSummaryMetas)) {
            Model::validateArray($this->cloudAssetSummaryMetas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudAssetSummaryMetas) {
            if (\is_array($this->cloudAssetSummaryMetas)) {
                $res['CloudAssetSummaryMetas'] = [];
                $n1 = 0;
                foreach ($this->cloudAssetSummaryMetas as $item1) {
                    $res['CloudAssetSummaryMetas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudAssetSummaryMetas'])) {
            if (!empty($map['CloudAssetSummaryMetas'])) {
                $model->cloudAssetSummaryMetas = [];
                $n1 = 0;
                foreach ($map['CloudAssetSummaryMetas'] as $item1) {
                    $model->cloudAssetSummaryMetas[$n1] = cloudAssetSummaryMetas::fromMap($item1);
                    ++$n1;
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
