<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest\documentControl\backgroundControl;

use AlibabaCloud\Tea\Model;

class bgInvisibleControl extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $opacity;
    protected $_name = [
        'opacity' => 'Opacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->opacity) {
            $res['Opacity'] = $this->opacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bgInvisibleControl
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Opacity'])) {
            $model->opacity = $map['Opacity'];
        }

        return $model;
    }
}
