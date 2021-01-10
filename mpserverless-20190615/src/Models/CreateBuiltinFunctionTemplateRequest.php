<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class CreateBuiltinFunctionTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $builtinFunctionTemplateCategoryId;
    protected $_name = [
        'builtinFunctionTemplateCategoryId' => 'BuiltinFunctionTemplateCategoryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->builtinFunctionTemplateCategoryId) {
            $res['BuiltinFunctionTemplateCategoryId'] = $this->builtinFunctionTemplateCategoryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBuiltinFunctionTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuiltinFunctionTemplateCategoryId'])) {
            $model->builtinFunctionTemplateCategoryId = $map['BuiltinFunctionTemplateCategoryId'];
        }

        return $model;
    }
}
