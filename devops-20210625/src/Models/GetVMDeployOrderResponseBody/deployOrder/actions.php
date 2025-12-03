<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetVMDeployOrderResponseBody\deployOrder;

use AlibabaCloud\Dara\Model;

class actions extends Model
{
    /**
     * @var bool
     */
    public $disable;

    /**
     * @var mixed
     */
    public $params;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'disable' => 'disable',
        'params' => 'params',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disable) {
            $res['disable'] = $this->disable;
        }

        if (null !== $this->params) {
            $res['params'] = $this->params;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['disable'])) {
            $model->disable = $map['disable'];
        }

        if (isset($map['params'])) {
            $model->params = $map['params'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
