<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapi\V20210930\Models\AiStoreReceiveConfig;

use AlibabaCloud\Tea\Model;

class dingTalk extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $secret;
    protected $_name = [
        'address' => 'Address',
        'secret'  => 'Secret',
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
        if (null !== $this->secret) {
            $res['Secret'] = $this->secret;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dingTalk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Secret'])) {
            $model->secret = $map['Secret'];
        }

        return $model;
    }
}
