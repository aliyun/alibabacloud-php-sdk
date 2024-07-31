<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgDesensPlanAddOrUpdateRequest\desensRules;

use AlibabaCloud\Tea\Model;

class desensPlan extends Model
{
    /**
     * @description The masking method configured in the data masking rule. Valid values:
     *
     *   hash
     *   mapping
     *   mask
     *   charreplacement
     *   intervalselect
     *   decimalpoint
     *   emptydesens
     *
     * This parameter is required.
     * @example hash
     *
     * @var string
     */
    public $desensPlanType;

    /**
     * @description The parameters for the data masking rule.
     *
     * @var mixed[]
     */
    public $extParam;
    protected $_name = [
        'desensPlanType' => 'DesensPlanType',
        'extParam'       => 'ExtParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desensPlanType) {
            $res['DesensPlanType'] = $this->desensPlanType;
        }
        if (null !== $this->extParam) {
            $res['ExtParam'] = $this->extParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return desensPlan
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesensPlanType'])) {
            $model->desensPlanType = $map['DesensPlanType'];
        }
        if (isset($map['ExtParam'])) {
            $model->extParam = $map['ExtParam'];
        }

        return $model;
    }
}
