<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCriteriaStrategyResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The unique identifier of the rule.
     *
     * @example test
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the rule.
     *
     * @example test
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'id'    => 'Id',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
