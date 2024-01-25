<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\ListComponentsResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class annotations extends Model
{
    /**
     * @var string
     */
    public $annotations;
    protected $_name = [
        'annotations' => 'annotations',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotations) {
            $res['annotations'] = $this->annotations;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return annotations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['annotations'])) {
            $model->annotations = $map['annotations'];
        }

        return $model;
    }
}
