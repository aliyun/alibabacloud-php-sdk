<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Tea\Model;

class DeleteQosPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorMessages;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'errorMessages' => 'ErrorMessages',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessages) {
            $res['ErrorMessages'] = $this->errorMessages;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteQosPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMessages'])) {
            $model->errorMessages = $map['ErrorMessages'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
