<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class CopyConfigRulesRequest extends Model
{
    /**
     * @description The IDs of the destination account groups into which the rules are replicated. Separate multiple account group IDs with commas (,).
     *
     * > If you leave this parameter empty, the compliance packages are replicated into the same account group.
     * @example ca-4b4e626622af005d****
     *
     * @var string
     */
    public $desAggregatorIds;

    /**
     * @description The ID of the account group to which the rules belong.
     *
     * For more information about how to obtain the ID of an account group, see [ListAggregators](https://help.aliyun.com/document_detail/255797.html).
     * @example ca-24db626622af0060****
     *
     * @var string
     */
    public $srcAggregatorId;

    /**
     * @description The rule IDs. Separate multiple rule IDs with commas (,).
     *
     * This parameter is required.
     * @example cr-4b57626622af0065****,cr-47c1626622af0050****
     *
     * @var string
     */
    public $srcConfigRuleIds;
    protected $_name = [
        'desAggregatorIds' => 'DesAggregatorIds',
        'srcAggregatorId'  => 'SrcAggregatorId',
        'srcConfigRuleIds' => 'SrcConfigRuleIds',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CopyConfigRulesRequest
     */
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
