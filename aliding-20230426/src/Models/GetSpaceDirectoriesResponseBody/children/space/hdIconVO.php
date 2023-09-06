<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesResponseBody\children\space;

use AlibabaCloud\Tea\Model;

class hdIconVO extends Model
{
    /**
     * @example https://img.alicdn.com/imgextra/i1/xxxxx.png
     *
     * @var string
     */
    public $icon;

    /**
     * @example 1
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'icon' => 'Icon',
        'type' => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hdIconVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
