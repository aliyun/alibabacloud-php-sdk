<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class SaveBuiltinFunctionTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $builtinFunctionTemplateCategoryId;

    /**
     * @var string
     */
    public $builtinFunctionTemplateProfile;
    protected $_name = [
        'bizId'                             => 'BizId',
        'builtinFunctionTemplateCategoryId' => 'BuiltinFunctionTemplateCategoryId',
        'builtinFunctionTemplateProfile'    => 'BuiltinFunctionTemplateProfile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->builtinFunctionTemplateCategoryId) {
            $res['BuiltinFunctionTemplateCategoryId'] = $this->builtinFunctionTemplateCategoryId;
        }
        if (null !== $this->builtinFunctionTemplateProfile) {
            $res['BuiltinFunctionTemplateProfile'] = $this->builtinFunctionTemplateProfile;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveBuiltinFunctionTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BuiltinFunctionTemplateCategoryId'])) {
            $model->builtinFunctionTemplateCategoryId = $map['BuiltinFunctionTemplateCategoryId'];
        }
        if (isset($map['BuiltinFunctionTemplateProfile'])) {
            $model->builtinFunctionTemplateProfile = $map['BuiltinFunctionTemplateProfile'];
        }

        return $model;
    }
}
