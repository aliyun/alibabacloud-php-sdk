<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class PostISConvRewriterRequest extends Model
{
    /**
     * @example "conversation_rewriter"
     *
     * @var string
     */
    public $algorithm;

    /**
     * @example false
     *
     * @var bool
     */
    public $debug;

    /**
     * @var mixed[]
     */
    public $input;

    /**
     * @var string
     */
    public $model;

    /**
     * @var mixed[]
     */
    public $parameters;
    protected $_name = [
        'algorithm'  => 'Algorithm',
        'debug'      => 'Debug',
        'input'      => 'Input',
        'model'      => 'Model',
        'parameters' => 'Parameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }
        if (null !== $this->debug) {
            $res['Debug'] = $this->debug;
        }
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PostISConvRewriterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['Debug'])) {
            $model->debug = $map['Debug'];
        }
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }

        return $model;
    }
}
