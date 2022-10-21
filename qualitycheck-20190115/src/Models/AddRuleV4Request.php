<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Tea\Model;

class AddRuleV4Request extends Model
{
    /**
     * @var bool
     */
    public $isCopy;

    /**
     * @var string
     */
    public $jsonStrForRule;
    protected $_name = [
        'isCopy'         => 'IsCopy',
        'jsonStrForRule' => 'JsonStrForRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isCopy) {
            $res['IsCopy'] = $this->isCopy;
        }
        if (null !== $this->jsonStrForRule) {
            $res['JsonStrForRule'] = $this->jsonStrForRule;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddRuleV4Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsCopy'])) {
            $model->isCopy = $map['IsCopy'];
        }
        if (isset($map['JsonStrForRule'])) {
            $model->jsonStrForRule = $map['JsonStrForRule'];
        }

        return $model;
    }
}
