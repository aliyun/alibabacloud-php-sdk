<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRuleAttributeRequest\ruleConditions;

use AlibabaCloud\Tea\Model;

class hostConfig extends Model
{
    /**
     * @description The hostname.
     *
     * @var string[]
     */
    public $values;
    protected $_name = [
        'values' => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
