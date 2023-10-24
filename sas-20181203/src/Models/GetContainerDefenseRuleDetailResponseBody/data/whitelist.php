<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetContainerDefenseRuleDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class whitelist extends Model
{
    /**
     * @var string[]
     */
    public $hash;

    /**
     * @var string[]
     */
    public $image;

    /**
     * @var string[]
     */
    public $path;
    protected $_name = [
        'hash'  => 'Hash',
        'image' => 'Image',
        'path'  => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hash) {
            $res['Hash'] = $this->hash;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return whitelist
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hash'])) {
            if (!empty($map['Hash'])) {
                $model->hash = $map['Hash'];
            }
        }
        if (isset($map['Image'])) {
            if (!empty($map['Image'])) {
                $model->image = $map['Image'];
            }
        }
        if (isset($map['Path'])) {
            if (!empty($map['Path'])) {
                $model->path = $map['Path'];
            }
        }

        return $model;
    }
}
