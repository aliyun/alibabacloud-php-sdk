<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\AddContainerAppResponseBody\containerId;
use AlibabaCloud\Tea\Model;

class AddContainerAppResponseBody extends Model
{
    /**
     * @var containerId
     */
    public $containerId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'containerId' => 'ContainerId',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerId) {
            $res['ContainerId'] = null !== $this->containerId ? $this->containerId->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddContainerAppResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerId'])) {
            $model->containerId = containerId::fromMap($map['ContainerId']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
