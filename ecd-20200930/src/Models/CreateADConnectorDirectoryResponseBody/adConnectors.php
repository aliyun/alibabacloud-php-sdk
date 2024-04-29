<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateADConnectorDirectoryResponseBody;

use AlibabaCloud\Tea\Model;

class adConnectors extends Model
{
    /**
     * @description The connection address.
     *
     * @example 127.0.**.**
     *
     * @var string
     */
    public $address;
    protected $_name = [
        'address' => 'Address',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return adConnectors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        return $model;
    }
}
