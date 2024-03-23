<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class PostISConvRewriterShrinkRequest extends Model
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
     * @var string
     */
    public $inputShrink;

    /**
     * @var string
     */
    public $parametersShrink;

    /**
     * @example "default"
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'algorithm'        => 'Algorithm',
        'debug'            => 'Debug',
        'inputShrink'      => 'Input',
        'parametersShrink' => 'Parameters',
        'version'          => 'Version',
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
        if (null !== $this->inputShrink) {
            $res['Input'] = $this->inputShrink;
        }
        if (null !== $this->parametersShrink) {
            $res['Parameters'] = $this->parametersShrink;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PostISConvRewriterShrinkRequest
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
            $model->inputShrink = $map['Input'];
        }
        if (isset($map['Parameters'])) {
            $model->parametersShrink = $map['Parameters'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
