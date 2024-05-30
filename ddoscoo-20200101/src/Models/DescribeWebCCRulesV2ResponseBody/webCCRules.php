<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesV2ResponseBody;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesV2ResponseBody\webCCRules\ruleDetail;
use AlibabaCloud\Tea\Model;

class webCCRules extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $expires;

    /**
     * @example wq
     *
     * @var string
     */
    public $name;

    /**
     * @example manual
     *
     * @var string
     */
    public $owner;

    /**
     * @var ruleDetail
     */
    public $ruleDetail;
    protected $_name = [
        'expires'    => 'Expires',
        'name'       => 'Name',
        'owner'      => 'Owner',
        'ruleDetail' => 'RuleDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expires) {
            $res['Expires'] = $this->expires;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->ruleDetail) {
            $res['RuleDetail'] = null !== $this->ruleDetail ? $this->ruleDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return webCCRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Expires'])) {
            $model->expires = $map['Expires'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['RuleDetail'])) {
            $model->ruleDetail = ruleDetail::fromMap($map['RuleDetail']);
        }

        return $model;
    }
}
