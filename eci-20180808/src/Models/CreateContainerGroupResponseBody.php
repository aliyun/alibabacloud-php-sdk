<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Tea\Model;

class CreateContainerGroupResponseBody extends Model
{
    /**
     * @description The ID of the elastic container instance.
     *
     * @example eci-uf6fonnghi50u374****
     *
     * @var string
     */
    public $containerGroupId;

    /**
     * @description The ID of the request.
     *
     * @example 89945DD3-9072-47D0-A318-353284CFC7B3
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'containerGroupId' => 'ContainerGroupId',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerGroupId) {
            $res['ContainerGroupId'] = $this->containerGroupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateContainerGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerGroupId'])) {
            $model->containerGroupId = $map['ContainerGroupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
