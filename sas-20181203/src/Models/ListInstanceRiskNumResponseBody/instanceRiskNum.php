<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListInstanceRiskNumResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListInstanceRiskNumResponseBody\instanceRiskNum\instanceItem;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListInstanceRiskNumResponseBody\instanceRiskNum\riskNumEntity;
use AlibabaCloud\Tea\Model;

class instanceRiskNum extends Model
{
    /**
     * @description The information about the instance.
     *
     * @var instanceItem
     */
    public $instanceItem;

    /**
     * @description The statistics about the risks.
     *
     * @var riskNumEntity
     */
    public $riskNumEntity;
    protected $_name = [
        'instanceItem'  => 'InstanceItem',
        'riskNumEntity' => 'RiskNumEntity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceItem) {
            $res['InstanceItem'] = null !== $this->instanceItem ? $this->instanceItem->toMap() : null;
        }
        if (null !== $this->riskNumEntity) {
            $res['RiskNumEntity'] = null !== $this->riskNumEntity ? $this->riskNumEntity->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceRiskNum
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceItem'])) {
            $model->instanceItem = instanceItem::fromMap($map['InstanceItem']);
        }
        if (isset($map['RiskNumEntity'])) {
            $model->riskNumEntity = riskNumEntity::fromMap($map['RiskNumEntity']);
        }

        return $model;
    }
}
