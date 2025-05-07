<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo\param;

class operatorBasicInfo extends Model
{
    /**
     * @var string
     */
    public $oid;

    /**
     * @var string
     */
    public $operName;

    /**
     * @var param
     */
    public $param;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'oid' => 'Oid',
        'operName' => 'OperName',
        'param' => 'Param',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->param) {
            $this->param->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->oid) {
            $res['Oid'] = $this->oid;
        }

        if (null !== $this->operName) {
            $res['OperName'] = $this->operName;
        }

        if (null !== $this->param) {
            $res['Param'] = null !== $this->param ? $this->param->toArray($noStream) : $this->param;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
