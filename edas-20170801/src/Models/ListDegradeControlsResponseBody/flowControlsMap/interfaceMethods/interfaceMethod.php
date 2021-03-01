<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListDegradeControlsResponseBody\flowControlsMap\interfaceMethods;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListDegradeControlsResponseBody\flowControlsMap\interfaceMethods\interfaceMethod\methods;
use AlibabaCloud\Tea\Model;

class interfaceMethod extends Model
{
    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $name;

    /**
     * @var methods
     */
    public $methods;
    protected $_name = [
        'version' => 'Version',
        'name'    => 'name',
        'methods' => 'Methods',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->methods) {
            $res['Methods'] = null !== $this->methods ? $this->methods->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return interfaceMethod
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['Methods'])) {
            $model->methods = methods::fromMap($map['Methods']);
        }

        return $model;
    }
}
