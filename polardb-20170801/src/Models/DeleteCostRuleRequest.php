<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DeleteCostRuleRequest extends Model
{
    /**
     * @var string
     */
    public $costRuleId;

    /**
     * @var string
     */
    public $gwClusterId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'costRuleId' => 'CostRuleId',
        'gwClusterId' => 'GwClusterId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costRuleId) {
            $res['CostRuleId'] = $this->costRuleId;
        }

        if (null !== $this->gwClusterId) {
            $res['GwClusterId'] = $this->gwClusterId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['CostRuleId'])) {
            $model->costRuleId = $map['CostRuleId'];
        }

        if (isset($map['GwClusterId'])) {
            $model->gwClusterId = $map['GwClusterId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
