<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConfigDataSetResponseBody\data\ruleInfo\rules;

use AlibabaCloud\Tea\Model;

class ruleBasicInfo extends Model
{
    /**
     * @var int
     */
    public $externalProperty;

    /**
     * @var string
     */
    public $lambda;

    /**
     * @var string
     */
    public $rid;
    protected $_name = [
        'externalProperty' => 'ExternalProperty',
        'lambda'           => 'Lambda',
        'rid'              => 'Rid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalProperty) {
            $res['ExternalProperty'] = $this->externalProperty;
        }
        if (null !== $this->lambda) {
            $res['Lambda'] = $this->lambda;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleBasicInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExternalProperty'])) {
            $model->externalProperty = $map['ExternalProperty'];
        }
        if (isset($map['Lambda'])) {
            $model->lambda = $map['Lambda'];
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }

        return $model;
    }
}
