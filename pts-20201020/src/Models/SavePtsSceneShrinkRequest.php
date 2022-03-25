<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Tea\Model;

class SavePtsSceneShrinkRequest extends Model
{
    /**
     * @description 场景详细信息
     *
     * @var string
     */
    public $sceneShrink;
    protected $_name = [
        'sceneShrink' => 'Scene',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sceneShrink) {
            $res['Scene'] = $this->sceneShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SavePtsSceneShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Scene'])) {
            $model->sceneShrink = $map['Scene'];
        }

        return $model;
    }
}
