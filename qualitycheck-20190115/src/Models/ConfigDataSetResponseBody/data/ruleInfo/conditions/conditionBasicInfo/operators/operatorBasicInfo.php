<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConfigDataSetResponseBody\data\ruleInfo\conditions\conditionBasicInfo\operators;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConfigDataSetResponseBody\data\ruleInfo\conditions\conditionBasicInfo\operators\operatorBasicInfo\param;
use AlibabaCloud\Tea\Model;

class operatorBasicInfo extends Model
{
    /**
     * @var string
     */
    public $oid;

    /**
     * @var param
     */
    public $param;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'oid'   => 'Oid',
        'param' => 'Param',
        'type'  => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->oid) {
            $res['Oid'] = $this->oid;
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
        if (isset($map['Param'])) {
            $model->param = param::fromMap($map['Param']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
