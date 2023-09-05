<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgxdcapserver\V20200726\Models;

use AlibabaCloud\Tea\Model;

class PckCrlRequest extends Model
{
    /**
     * @example platform
     *
     * @var string
     */
    public $ca;
    protected $_name = [
        'ca' => 'ca',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ca) {
            $res['ca'] = $this->ca;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PckCrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ca'])) {
            $model->ca = $map['ca'];
        }

        return $model;
    }
}
