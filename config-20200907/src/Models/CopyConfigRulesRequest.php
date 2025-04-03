<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class CopyConfigRulesRequest extends Model
{
    /**
     * @var string
     */
    public $desAggregatorIds;

    /**
     * @var string
     */
    public $srcAggregatorId;

    /**
     * @var string
     */
    public $srcConfigRuleIds;
    protected $_name = [
        'desAggregatorIds' => 'DesAggregatorIds',
        'srcAggregatorId' => 'SrcAggregatorId',
        'srcConfigRuleIds' => 'SrcConfigRuleIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desAggregatorIds) {
            $res['DesAggregatorIds'] = $this->desAggregatorIds;
        }

        if (null !== $this->srcAggregatorId) {
            $res['SrcAggregatorId'] = $this->srcAggregatorId;
        }

        if (null !== $this->srcConfigRuleIds) {
            $res['SrcConfigRuleIds'] = $this->srcConfigRuleIds;
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
        if (isset($map['DesAggregatorIds'])) {
            $model->desAggregatorIds = $map['DesAggregatorIds'];
        }

        if (isset($map['SrcAggregatorId'])) {
            $model->srcAggregatorId = $map['SrcAggregatorId'];
        }

        if (isset($map['SrcConfigRuleIds'])) {
            $model->srcConfigRuleIds = $map['SrcConfigRuleIds'];
        }

        return $model;
    }
}
