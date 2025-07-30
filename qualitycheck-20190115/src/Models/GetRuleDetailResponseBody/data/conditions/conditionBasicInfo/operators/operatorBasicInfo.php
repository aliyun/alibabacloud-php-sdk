<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo\param;
use AlibabaCloud\Tea\Model;

class operatorBasicInfo extends Model
{
    /**
     * @example 8
     *
     * @var string
     */
    public $oid;

    /**
     * @example operator demo
     *
     * @var string
     */
    public $operName;

    /**
     * @var param
     */
    public $param;

    /**
     * @example REGULAR_EXPRESSION
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'oid' => 'Oid',
        'operName' => 'OperName',
        'param' => 'Param',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->oid) {
            $res['Oid'] = $this->oid;
        }
        if (null !== $this->operName) {
            $res['OperName'] = $this->operName;
        }
        if (null !== $this->param) {
            $res['Param'] = null !== $this->param ? $this->param->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operatorBasicInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Oid'])) {
            $model->oid = $map['Oid'];
        }
        if (isset($map['OperName'])) {
            $model->operName = $map['OperName'];
        }
        if (isset($map['Param'])) {
            $model->param = param::fromMap($map['Param']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
