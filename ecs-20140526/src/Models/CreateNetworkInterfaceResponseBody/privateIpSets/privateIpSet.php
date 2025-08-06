<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceResponseBody\privateIpSets;

use AlibabaCloud\Dara\Model;

class privateIpSet extends Model
{
    /**
     * @var bool
     */
    public $primary;

    /**
     * @var string
     */
    public $privateIpAddress;
    protected $_name = [
        'primary' => 'Primary',
        'privateIpAddress' => 'PrivateIpAddress',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->primary) {
            $res['Primary'] = $this->primary;
        }

        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
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
        if (isset($map['Primary'])) {
            $model->primary = $map['Primary'];
        }

        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }

        return $model;
    }
}
