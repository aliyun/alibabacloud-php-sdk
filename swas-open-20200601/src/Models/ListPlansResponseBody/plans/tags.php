<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListPlansResponseBody\plans;

use AlibabaCloud\Dara\Model;

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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
