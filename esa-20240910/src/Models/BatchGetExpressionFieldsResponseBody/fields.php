<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\BatchGetExpressionFieldsResponseBody;

use AlibabaCloud\Tea\Model;

class fields extends Model
{
    /**
     * @description The fields that match the regular expression.
     *
     * @var string[]
     */
    public $fields;

    /**
     * @description The ID of the regular expression, which corresponds to the expression ID in the request parameter.
     *
     * @example 1
     *
     * @var string
     */
    public $id;
    protected $_name = [
        'fields' => 'Fields',
        'id' => 'Id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fields) {
            $res['Fields'] = $this->fields;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Fields'])) {
            if (!empty($map['Fields'])) {
                $model->fields = $map['Fields'];
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
