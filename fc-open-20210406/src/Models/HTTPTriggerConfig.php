<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class HTTPTriggerConfig extends Model
{
    /**
     * @description authType
     *
     * @var string
     */
    public $authType;

    /**
     * @description methods
     *
     * @var string[]
     */
    public $methods;
    protected $_name = [
        'authType' => 'authType',
        'methods'  => 'methods',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authType) {
            $res['authType'] = $this->authType;
        }
        if (null !== $this->methods) {
            $res['methods'] = $this->methods;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HTTPTriggerConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['authType'])) {
            $model->authType = $map['authType'];
        }
        if (isset($map['methods'])) {
            if (!empty($map['methods'])) {
                $model->methods = $map['methods'];
            }
        }

        return $model;
    }
}
