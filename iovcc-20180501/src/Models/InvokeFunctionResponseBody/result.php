<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\InvokeFunctionResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $output;

    /**
     * @var string
     */
    public $backEndRequestId;
    protected $_name = [
        'output'           => 'Output',
        'backEndRequestId' => 'BackEndRequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->backEndRequestId) {
            $res['BackEndRequestId'] = $this->backEndRequestId;
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
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['BackEndRequestId'])) {
            $model->backEndRequestId = $map['BackEndRequestId'];
        }

        return $model;
    }
}
