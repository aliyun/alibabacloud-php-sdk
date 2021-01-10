<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoPoseJobListResponseBody\jobList\job;

use AlibabaCloud\Tea\Model;

class MNSMessageResult extends Model
{
    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $errorCode;
    protected $_name = [
        'messageId'    => 'MessageId',
        'errorMessage' => 'ErrorMessage',
        'errorCode'    => 'ErrorCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MNSMessageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        return $model;
    }
}
