<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20190701\Models;

use AlibabaCloud\Tea\Model;

class InvokeActionRequest extends Model
{
    /**
     * @var string
     */
    public $invokeProduct;

    /**
     * @var string
     */
    public $invokeRegion;

    /**
     * @var string
     */
    public $invokeAction;

    /**
     * @var string
     */
    public $invokeParams;
    protected $_name = [
        'invokeProduct' => 'InvokeProduct',
        'invokeRegion'  => 'InvokeRegion',
        'invokeAction'  => 'InvokeAction',
        'invokeParams'  => 'InvokeParams',
    ];

    public function validate()
    {
        Model::validateRequired('invokeAction', $this->invokeAction, true);
        Model::validateRequired('invokeParams', $this->invokeParams, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invokeProduct) {
            $res['InvokeProduct'] = $this->invokeProduct;
        }
        if (null !== $this->invokeRegion) {
            $res['InvokeRegion'] = $this->invokeRegion;
        }
        if (null !== $this->invokeAction) {
            $res['InvokeAction'] = $this->invokeAction;
        }
        if (null !== $this->invokeParams) {
            $res['InvokeParams'] = $this->invokeParams;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvokeActionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvokeProduct'])) {
            $model->invokeProduct = $map['InvokeProduct'];
        }
        if (isset($map['InvokeRegion'])) {
            $model->invokeRegion = $map['InvokeRegion'];
        }
        if (isset($map['InvokeAction'])) {
            $model->invokeAction = $map['InvokeAction'];
        }
        if (isset($map['InvokeParams'])) {
            $model->invokeParams = $map['InvokeParams'];
        }

        return $model;
    }
}
