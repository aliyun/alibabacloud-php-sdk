<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListInstanceRiskNumResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListInstanceRiskNumResponseBody\instanceRiskNum\instanceItem;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListInstanceRiskNumResponseBody\instanceRiskNum\riskNumEntity;

class instanceRiskNum extends Model
{
    /**
     * @var instanceItem
     */
    public $instanceItem;

    /**
     * @var riskNumEntity
     */
    public $riskNumEntity;
    protected $_name = [
        'instanceItem' => 'InstanceItem',
        'riskNumEntity' => 'RiskNumEntity',
    ];

    public function validate()
    {
        if (null !== $this->instanceItem) {
            $this->instanceItem->validate();
        }
        if (null !== $this->riskNumEntity) {
            $this->riskNumEntity->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceItem) {
            $res['InstanceItem'] = null !== $this->instanceItem ? $this->instanceItem->toArray($noStream) : $this->instanceItem;
        }

        if (null !== $this->riskNumEntity) {
            $res['RiskNumEntity'] = null !== $this->riskNumEntity ? $this->riskNumEntity->toArray($noStream) : $this->riskNumEntity;
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
        if (isset($map['InstanceItem'])) {
            $model->instanceItem = instanceItem::fromMap($map['InstanceItem']);
        }

        if (isset($map['RiskNumEntity'])) {
            $model->riskNumEntity = riskNumEntity::fromMap($map['RiskNumEntity']);
        }

        return $model;
    }
}
