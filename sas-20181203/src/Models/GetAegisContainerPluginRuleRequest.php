<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetAegisContainerPluginRuleRequest extends Model
{
    /**
     * @description The ID of the defense rule against container escapes.
     *
     * >  You can call the [ListAegisContainerPluginRule](~~ListAegisContainerPluginRule~~) operation to obtain the ID.
     *
     * @example 1141****
     *
     * @var string
     */
    public $id;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The type of the rule. Valid values:
     *
     *   **0**: custom rule
     *   **1**: system rule
     *
     * @example 0
     *
     * @var int
     */
    public $ruleType;
    protected $_name = [
        'id' => 'Id',
        'lang' => 'Lang',
        'ruleType' => 'RuleType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAegisContainerPluginRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        return $model;
    }
}
