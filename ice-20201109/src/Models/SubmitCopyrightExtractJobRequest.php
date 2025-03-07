<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitCopyrightExtractJobRequest\input;
use AlibabaCloud\Tea\Model;

class SubmitCopyrightExtractJobRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var input
     */
    public $input;

    /**
     * @example {"algoType":"v2"}
     *
     * @var string
     */
    public $params;

    /**
     * @example 123
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'input'    => 'Input',
        'params'   => 'Params',
        'userData' => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitCopyrightExtractJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
