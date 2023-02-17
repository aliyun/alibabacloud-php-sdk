<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\Configuration\severityConfigurations;

use AlibabaCloud\Tea\Model;

class evalCondition extends Model
{
    /**
     * @var string
     */
    public $condition;

    /**
     * @var string
     */
    public $countCondition;
    protected $_name = [
        'condition'      => 'condition',
        'countCondition' => 'countCondition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->condition) {
            $res['condition'] = $this->condition;
        }
        if (null !== $this->countCondition) {
            $res['countCondition'] = $this->countCondition;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return evalCondition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['condition'])) {
            $model->condition = $map['condition'];
        }
        if (isset($map['countCondition'])) {
            $model->countCondition = $map['countCondition'];
        }

        return $model;
    }
}
