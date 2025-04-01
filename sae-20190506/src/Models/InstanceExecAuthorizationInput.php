<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

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
        if (null !== $this->options) {
            $this->options->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->options) {
            $res['options'] = null !== $this->options ? $this->options->toArray($noStream) : $this->options;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['options'])) {
            $model->options = InstanceExecAuthorizationInputOptions::fromMap($map['options']);
        }

        return $model;
    }
}
