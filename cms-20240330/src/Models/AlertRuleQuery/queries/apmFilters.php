<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleQuery\queries;

use AlibabaCloud\Tea\Model;

class apmFilters extends Model
{
    /**
     * @var string
     */
    public $dim;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'dim' => 'dim',
        'type' => 'type',
        'value' => 'value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dim) {
            $res['dim'] = $this->dim;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apmFilters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dim'])) {
            $model->dim = $map['dim'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
