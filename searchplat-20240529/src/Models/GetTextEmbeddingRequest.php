<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models;

use AlibabaCloud\Tea\Model;

class GetTextEmbeddingRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $input;

    /**
     * @example document
     *
     * @var string
     */
    public $inputType;
    protected $_name = [
        'input'     => 'input',
        'inputType' => 'input_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->input) {
            $res['input'] = $this->input;
        }
        if (null !== $this->inputType) {
            $res['input_type'] = $this->inputType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTextEmbeddingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['input'])) {
            if (!empty($map['input'])) {
                $model->input = $map['input'];
            }
        }
        if (isset($map['input_type'])) {
            $model->inputType = $map['input_type'];
        }

        return $model;
    }
}
