<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\GetDeviceOtaInfoTestResponseBody;

use AlibabaCloud\SDK\Wyota\V20210420\Models\GetDeviceOtaInfoTestResponseBody\data\version;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var version
     */
    public $version;
    protected $_name = [
        'version' => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->version) {
            $res['Version'] = null !== $this->version ? $this->version->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Version'])) {
            $model->version = version::fromMap($map['Version']);
        }

        return $model;
    }
}
