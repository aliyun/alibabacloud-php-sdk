<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMessageRequest;

use AlibabaCloud\Tea\Model;

class flowAction extends Model
{
    /**
     * @description flow默认参数
     *
     * @var string[]
     */
    public $flowActionData;

    /**
     * @description flow token信息
     *
     * @example 1122***
     *
     * @var string
     */
    public $flowToken;
    protected $_name = [
        'flowActionData' => 'FlowActionData',
        'flowToken'      => 'FlowToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowActionData) {
            $res['FlowActionData'] = $this->flowActionData;
        }
        if (null !== $this->flowToken) {
            $res['FlowToken'] = $this->flowToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowAction
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowActionData'])) {
            $model->flowActionData = $map['FlowActionData'];
        }
        if (isset($map['FlowToken'])) {
            $model->flowToken = $map['FlowToken'];
        }

        return $model;
    }
}
