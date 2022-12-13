<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\RefreshIntegrationConfigKeyResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 859FA6A2-AC5C-4B09-BE23-986F887H6A232
     *
     * @var string
     */
    public $key;
    protected $_name = [
        'key' => 'key',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = $this->key;
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
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        return $model;
    }
}
