<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class InstanceExecAuthorizationInput extends Model
{
    /**
     * @var InstanceExecAuthorizationInputOptions
     */
    public $options;
    protected $_name = [
        'options' => 'options',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->options) {
            $res['options'] = null !== $this->options ? $this->options->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstanceExecAuthorizationInput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['options'])) {
            $model->options = InstanceExecAuthorizationInputOptions::fromMap($map['options']);
        }

        return $model;
    }
}
