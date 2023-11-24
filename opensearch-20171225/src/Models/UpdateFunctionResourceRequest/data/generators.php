<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateFunctionResourceRequest\data;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateFunctionResourceRequest\data\generators\input;
use AlibabaCloud\Tea\Model;

class generators extends Model
{
    /**
     * @example combo
     *
     * @var string
     */
    public $generator;

    /**
     * @var input
     */
    public $input;

    /**
     * @example feature1
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
