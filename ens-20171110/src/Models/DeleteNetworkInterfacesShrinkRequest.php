<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteNetworkInterfacesShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $networkInterfaceIdsShrink;
    protected $_name = [
        'networkInterfaceIdsShrink' => 'NetworkInterfaceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkInterfaceIdsShrink) {
            $res['NetworkInterfaceIds'] = $this->networkInterfaceIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNetworkInterfacesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkInterfaceIds'])) {
            $model->networkInterfaceIdsShrink = $map['NetworkInterfaceIds'];
        }

        return $model;
    }
}
