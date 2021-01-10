<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class VerifyBuiltinFunctionTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $builtinFunctionTemplateId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'builtinFunctionTemplateId' => 'BuiltinFunctionTemplateId',
        'status'                    => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyBuiltinFunctionTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuiltinFunctionTemplateId'])) {
            $model->builtinFunctionTemplateId = $map['BuiltinFunctionTemplateId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
