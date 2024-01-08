<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data\result;

use AlibabaCloud\Tea\Model;

class customizedHit extends Model
{
    /**
     * @example xxx
     *
     * @var string
     */
    public $keyWords;

    /**
     * @var string
     */
    public $libName;
    protected $_name = [
        'keyWords' => 'KeyWords',
        'libName'  => 'LibName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyWords) {
            $res['KeyWords'] = $this->keyWords;
        }
        if (null !== $this->libName) {
            $res['LibName'] = $this->libName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customizedHit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyWords'])) {
            $model->keyWords = $map['KeyWords'];
        }
        if (isset($map['LibName'])) {
            $model->libName = $map['LibName'];
        }

        return $model;
    }
}
