<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListFlowControlsResponseBody\flowControlsMap\interfaceMethods\interfaceMethod;

use AlibabaCloud\Tea\Model;

class methods extends Model
{
    /**
     * @var string[]
     */
    public $method;
    protected $_name = [
        'method' => 'Method',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return methods
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Method'])) {
            if (!empty($map['Method'])) {
                $model->method = $map['Method'];
            }
        }

        return $model;
    }
}
