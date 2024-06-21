<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models;

use AlibabaCloud\Tea\Model;

class GetTextSparseEmbeddingRequest extends Model
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

    /**
     * @var bool
     */
    public $returnToken;
    protected $_name = [
        'input'       => 'input',
        'inputType'   => 'input_type',
        'returnToken' => 'return_token',
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
        if (null !== $this->returnToken) {
            $res['return_token'] = $this->returnToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTextSparseEmbeddingRequest
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
        if (isset($map['return_token'])) {
            $model->returnToken = $map['return_token'];
        }

        return $model;
    }
}
