<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class PostRuleStatusChangeRequest extends Model
{
    /**
     * @description The rule IDs. The value is a JSON array.
     *
     * @example [123,345]
     *
     * @var string
     */
    public $ids;

    /**
     * @description Specifies whether to enable the rule. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $inUse;

    /**
     * @description The region in which the data management center of the threat analysis feature resides. Specify this parameter based on the regions in which your assets reside. Valid values:
     *
     *   cn-hangzhou: Your assets reside in regions in China.
     *   ap-southeast-1: Your assets reside in regions outside China.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the rule. Valid values:
     *
     *   predefine
     *   customize
     *
     * @example customize
     *
     * @var string
     */
    public $ruleType;
    protected $_name = [
        'ids'      => 'Ids',
        'inUse'    => 'InUse',
        'regionId' => 'RegionId',
        'ruleType' => 'RuleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->inUse) {
            $res['InUse'] = $this->inUse;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PostRuleStatusChangeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }
        if (isset($map['InUse'])) {
            $model->inUse = $map['InUse'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        return $model;
    }
}
