<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class PostISRetrieveRouterRequest extends Model
{
    /**
     * @example "retrieve_router"
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
     * @var mixed[]
     */
    public $parameters;

    /**
     * @example "default"
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'algorithm'  => 'Algorithm',
        'debug'      => 'Debug',
        'input'      => 'Input',
        'parameters' => 'Parameters',
        'version'    => 'Version',
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
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PostISRetrieveRouterRequest
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
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
