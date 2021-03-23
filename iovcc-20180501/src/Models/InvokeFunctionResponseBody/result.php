<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\InvokeFunctionResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $backEndRequestId;

    /**
     * @var string
     */
    public $output;
    protected $_name = [
        'backEndRequestId' => 'BackEndRequestId',
        'output'           => 'Output',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backEndRequestId) {
            $res['BackEndRequestId'] = $this->backEndRequestId;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackEndRequestId'])) {
            $model->backEndRequestId = $map['BackEndRequestId'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        return $model;
    }
}
