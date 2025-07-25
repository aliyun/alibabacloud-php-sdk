<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMassMessageRequest\senderList;

use AlibabaCloud\Tea\Model;

class flowAction extends Model
{
    /**
     * @description The default parameter of the Flow.
     *
     * @var mixed[]
     */
    public $flowActionData;

    /**
     * @description The information about the Flow token.
     *
     * @example kde****
     *
     * @var string
     */
    public $flowToken;
    protected $_name = [
        'flowActionData' => 'FlowActionData',
        'flowToken' => 'FlowToken',
    ];

    public function validate() {}

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
