<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DeleteNetworkInterfacesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $networkInterfaceIdsShrink;
    protected $_name = [
        'networkInterfaceIdsShrink' => 'NetworkInterfaceIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkInterfaceIdsShrink) {
            $res['NetworkInterfaceIds'] = $this->networkInterfaceIdsShrink;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkInterfaceIds'])) {
            $model->networkInterfaceIdsShrink = $map['NetworkInterfaceIds'];
        }

        return $model;
    }
}
