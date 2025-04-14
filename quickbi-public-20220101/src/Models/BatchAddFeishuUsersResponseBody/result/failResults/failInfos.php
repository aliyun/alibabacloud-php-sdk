<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\BatchAddFeishuUsersResponseBody\result\failResults;

use AlibabaCloud\Dara\Model;

class failInfos extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $codeDesc;

    /**
     * @var string
     */
    public $input;
    protected $_name = [
        'code' => 'Code',
        'codeDesc' => 'CodeDesc',
        'input' => 'Input',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
