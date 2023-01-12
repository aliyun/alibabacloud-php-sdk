<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\RemoveMessagesResponseBody;

use AlibabaCloud\Tea\Model;

class actionResult extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $returnCode;

    /**
     * @example Success
     *
     * @var string
     */
    public $returnMessage;

    /**
     * @example [{\"uuid\": \"dim-a0bf795*******8e86d4d464dc3a\", \"code\": \"itm\", \"extendName\": \"item\", \"name\": u\"\u5541\", \"description\": u\"\u5546\u4e49\"}]
     *
     * @var string
     */
    public $returnValue;
    protected $_name = [
        'returnCode'    => 'ReturnCode',
        'returnMessage' => 'ReturnMessage',
        'returnValue'   => 'ReturnValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->returnCode) {
            $res['ReturnCode'] = $this->returnCode;
        }
        if (null !== $this->returnMessage) {
            $res['ReturnMessage'] = $this->returnMessage;
        }
        if (null !== $this->returnValue) {
            $res['ReturnValue'] = $this->returnValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return actionResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReturnCode'])) {
            $model->returnCode = $map['ReturnCode'];
        }
        if (isset($map['ReturnMessage'])) {
            $model->returnMessage = $map['ReturnMessage'];
        }
        if (isset($map['ReturnValue'])) {
            $model->returnValue = $map['ReturnValue'];
        }

        return $model;
    }
}
