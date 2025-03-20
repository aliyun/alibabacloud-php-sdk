<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListPlansResponseBody\plans;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @var string
     */
    public $cnTitle;

    /**
     * @var string
     */
    public $color;

    /**
     * @var string
     */
    public $enTitle;
    protected $_name = [
        'cnTitle' => 'CnTitle',
        'color' => 'Color',
        'enTitle' => 'EnTitle',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cnTitle) {
            $res['CnTitle'] = $this->cnTitle;
        }
        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }
        if (null !== $this->enTitle) {
            $res['EnTitle'] = $this->enTitle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CnTitle'])) {
            $model->cnTitle = $map['CnTitle'];
        }
        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }
        if (isset($map['EnTitle'])) {
            $model->enTitle = $map['EnTitle'];
        }

        return $model;
    }
}
