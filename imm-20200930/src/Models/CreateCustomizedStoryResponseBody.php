<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomizedStoryResponseBody extends Model
{
    /**
     * @description The ID of the story.
     *
     * @example 563062c0b085733f34ab****
     *
     * @var string
     */
    public $objectId;

    /**
     * @description The request ID.
     *
     * @example BC91D091-D49F-0ACD-95D5-F0621045****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'objectId'  => 'ObjectId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomizedStoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
