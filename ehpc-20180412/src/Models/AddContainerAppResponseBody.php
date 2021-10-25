<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\AddContainerAppResponseBody\containerId;
use AlibabaCloud\Tea\Model;

class AddContainerAppResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var containerId
     */
    public $containerId;
    protected $_name = [
        'requestId'   => 'RequestId',
        'containerId' => 'ContainerId',
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
        if (null !== $this->containerId) {
            $res['ContainerId'] = null !== $this->containerId ? $this->containerId->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ContainerId'])) {
            $model->containerId = containerId::fromMap($map['ContainerId']);
        }

        return $model;
    }
}
