<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\PublishRuleResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 98493A14-D619-4E88-9F8D-108939817F9F
     *
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'ruleId' => 'ruleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }

        return $model;
    }
}
