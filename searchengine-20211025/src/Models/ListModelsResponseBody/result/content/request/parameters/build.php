<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListModelsResponseBody\result\content\request\parameters;

use AlibabaCloud\Tea\Model;

class build extends Model
{
    /**
     * @example query
     *
     * @var string
     */
    public $inputType;
    protected $_name = [
        'inputType' => 'input_type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputType) {
            $res['input_type'] = $this->inputType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return build
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['input_type'])) {
            $model->inputType = $map['input_type'];
        }

        return $model;
    }
}
