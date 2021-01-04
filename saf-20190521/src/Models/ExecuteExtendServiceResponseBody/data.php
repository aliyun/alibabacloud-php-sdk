<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Saf\V20190521\Models\ExecuteExtendServiceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $invokeResult;
    protected $_name = [
        'invokeResult' => 'InvokeResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invokeResult) {
            $res['InvokeResult'] = $this->invokeResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvokeResult'])) {
            $model->invokeResult = $map['InvokeResult'];
        }

        return $model;
    }
}
