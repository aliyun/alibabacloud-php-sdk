<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\BatchAddFeishuUsersResponseBody\result\failResults;

use AlibabaCloud\Tea\Model;

class failInfos extends Model
{
    /**
     * @example ACCOUNT_EXIST
     *
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $codeDesc;

    /**
     * @example 20
     *
     * @var string
     */
    public $input;
    protected $_name = [
        'code'     => 'Code',
        'codeDesc' => 'CodeDesc',
        'input'    => 'Input',
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
        if (null !== $this->codeDesc) {
            $res['CodeDesc'] = $this->codeDesc;
        }
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CodeDesc'])) {
            $model->codeDesc = $map['CodeDesc'];
        }
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }

        return $model;
    }
}
