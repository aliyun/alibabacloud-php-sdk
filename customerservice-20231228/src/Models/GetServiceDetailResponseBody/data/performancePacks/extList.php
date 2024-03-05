<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models\GetServiceDetailResponseBody\data\performancePacks;

use AlibabaCloud\Tea\Model;

class extList extends Model
{
    /**
     * @var string
     */
    public $keyCode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed
     */
    public $value;

    /**
     * @var string
     */
    public $view;
    protected $_name = [
        'keyCode' => 'keyCode',
        'name'    => 'name',
        'value'   => 'value',
        'view'    => 'view',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyCode) {
            $res['keyCode'] = $this->keyCode;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->view) {
            $res['view'] = $this->view;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['keyCode'])) {
            $model->keyCode = $map['keyCode'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }
        if (isset($map['view'])) {
            $model->view = $map['view'];
        }

        return $model;
    }
}
