<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class GetDataQualityRuleTemplateRequest extends Model
{
    /**
     * @description The code for the template.
     *
     * This parameter is required.
     * @example USER_DEFINED:123
     *
     * @var string
     */
    public $code;
    protected $_name = [
        'code' => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataQualityRuleTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
