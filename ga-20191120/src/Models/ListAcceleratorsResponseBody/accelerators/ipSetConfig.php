<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListAcceleratorsResponseBody\accelerators;

use AlibabaCloud\Tea\Model;

class ipSetConfig extends Model
{
    /**
     * @var string
     */
    public $accessMode;
    protected $_name = [
        'accessMode' => 'AccessMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessMode) {
            $res['AccessMode'] = $this->accessMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipSetConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessMode'])) {
            $model->accessMode = $map['AccessMode'];
        }

        return $model;
    }
}
