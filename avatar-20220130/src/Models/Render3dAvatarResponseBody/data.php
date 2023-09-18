<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\Render3dAvatarResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example {"xxxx":"xxxxxxxx"}
     *
     * @var string
     */
    public $renderData;
    protected $_name = [
        'renderData' => 'RenderData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->renderData) {
            $res['RenderData'] = $this->renderData;
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
        if (isset($map['RenderData'])) {
            $model->renderData = $map['RenderData'];
        }

        return $model;
    }
}
