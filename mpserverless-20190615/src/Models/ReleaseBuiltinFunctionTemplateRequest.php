<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class ReleaseBuiltinFunctionTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $builtinFunctionTemplateId;
    protected $_name = [
        'builtinFunctionTemplateId' => 'BuiltinFunctionTemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->builtinFunctionTemplateId) {
            $res['BuiltinFunctionTemplateId'] = $this->builtinFunctionTemplateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReleaseBuiltinFunctionTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuiltinFunctionTemplateId'])) {
            $model->builtinFunctionTemplateId = $map['BuiltinFunctionTemplateId'];
        }

        return $model;
    }
}
