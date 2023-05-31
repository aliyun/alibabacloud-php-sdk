<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\FindContainerNetworkConnectResponseBody\connects;

use AlibabaCloud\Tea\Model;

class dstContainer extends Model
{
    /**
     * @description The ID of the destination container.
     *
     * @example 48a6dxxx9d5a5866
     *
     * @var string
     */
    public $containerId;
    protected $_name = [
        'containerId' => 'ContainerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dstContainer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }

        return $model;
    }
}
