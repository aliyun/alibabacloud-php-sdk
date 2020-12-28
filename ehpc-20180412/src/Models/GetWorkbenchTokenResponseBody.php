<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetWorkbenchTokenResponseBody\root;
use AlibabaCloud\Tea\Model;

class GetWorkbenchTokenResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var root
     */
    public $root;
    protected $_name = [
        'requestId' => 'RequestId',
        'root'      => 'root',
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
        if (null !== $this->root) {
            $res['root'] = null !== $this->root ? $this->root->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWorkbenchTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['root'])) {
            $model->root = root::fromMap($map['root']);
        }

        return $model;
    }
}
