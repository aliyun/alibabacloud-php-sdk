<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $customGroupId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'customGroupId' => 'CustomGroupId',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customGroupId) {
            $res['CustomGroupId'] = $this->customGroupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomGroupId'])) {
            $model->customGroupId = $map['CustomGroupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
