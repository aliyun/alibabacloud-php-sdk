<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models;

use AlibabaCloud\Tea\Model;

class CreateUisNodeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $uisNodeId;
    protected $_name = [
        'requestId' => 'RequestId',
        'uisNodeId' => 'UisNodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->uisNodeId) {
            $res['UisNodeId'] = $this->uisNodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUisNodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UisNodeId'])) {
            $model->uisNodeId = $map['UisNodeId'];
        }

        return $model;
    }
}
