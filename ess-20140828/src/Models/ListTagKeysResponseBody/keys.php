<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\ListTagKeysResponseBody;

use AlibabaCloud\Tea\Model;

class keys extends Model
{
    /**
     * @var string[]
     */
    public $key;
    protected $_name = [
        'key' => 'Key',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            if (!empty($map['Key'])) {
                $model->key = $map['Key'];
            }
        }

        return $model;
    }
}
