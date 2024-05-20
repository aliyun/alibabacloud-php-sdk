<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\AppStackInstance;

use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @example 127.0.0.1:8211
     *
     * @var string
     */
    public $address;

    /**
     * @example game
     *
     * @var string
     */
    public $name;

    /**
     * @example UDP
     *
     * @var string
     */
    public $protocol;
    protected $_name = [
        'address'  => 'Address',
        'name'     => 'Name',
        'protocol' => 'Protocol',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
