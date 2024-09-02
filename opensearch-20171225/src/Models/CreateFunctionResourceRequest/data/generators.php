<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateFunctionResourceRequest\data;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateFunctionResourceRequest\data\generators\input;
use AlibabaCloud\Tea\Model;

class generators extends Model
{
    /**
     * @description The type of the feature generator.
     *
     * Valid values:
     *
     *   lookup
     *
     * <!-- -->
     *
     *   sequence
     *
     * <!-- -->
     *
     *   overlap
     *
     * <!-- -->
     *
     *   raw
     *
     * <!-- -->
     *
     *   combo
     *
     * <!-- -->
     *
     *   id
     *
     * <!-- -->
     * @example id
     *
     * @var string
     */
    public $generator;

    /**
     * @description The input.
     *
     * @var input
     */
    public $input;

    /**
     * @description The name of the output feature.
     *
     * @example item_id_feature
     *
     * @var string
     */
    public $output;
    protected $_name = [
        'generator' => 'Generator',
        'input'     => 'Input',
        'output'    => 'Output',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->generator) {
            $res['Generator'] = $this->generator;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return generators
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Generator'])) {
            $model->generator = $map['Generator'];
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        return $model;
    }
}
