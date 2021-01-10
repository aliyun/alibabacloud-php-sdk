<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class SaveBuiltinFunctionTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $builtinFunctionTemplateId;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'builtinFunctionTemplateId' => 'BuiltinFunctionTemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->builtinFunctionTemplateId) {
            $res['BuiltinFunctionTemplateId'] = $this->builtinFunctionTemplateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveBuiltinFunctionTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BuiltinFunctionTemplateId'])) {
            $model->builtinFunctionTemplateId = $map['BuiltinFunctionTemplateId'];
        }

        return $model;
    }
}
