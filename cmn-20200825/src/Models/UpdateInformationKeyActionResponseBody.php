<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class UpdateInformationKeyActionResponseBody extends Model
{
    /**
     * @example alsoeqwe
     *
     * @var string
     */
    public $actionMessage;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'actionMessage' => 'ActionMessage',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionMessage) {
            $res['ActionMessage'] = $this->actionMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInformationKeyActionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionMessage'])) {
            $model->actionMessage = $map['ActionMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
