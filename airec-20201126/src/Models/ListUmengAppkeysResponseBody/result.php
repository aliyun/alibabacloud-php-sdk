<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListUmengAppkeysResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description appkey
     *
     * @example 5ddcf39f57729e708b00000e
     *
     * @var string
     */
    public $appkey;

    /**
     * @example xxx
     *
     * @var string
     */
    public $name;

    /**
     * @description Android/ios
     *
     * @example ios
     *
     * @var string
     */
    public $platform;
    protected $_name = [
        'appkey'   => 'appkey',
        'name'     => 'name',
        'platform' => 'platform',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appkey) {
            $res['appkey'] = $this->appkey;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->platform) {
            $res['platform'] = $this->platform;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appkey'])) {
            $model->appkey = $map['appkey'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['platform'])) {
            $model->platform = $map['platform'];
        }

        return $model;
    }
}
