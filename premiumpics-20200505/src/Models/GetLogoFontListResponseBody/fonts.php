<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models\GetLogoFontListResponseBody;

use AlibabaCloud\Tea\Model;

class fonts extends Model
{
    /**
     * @var string
     */
    public $fontId;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'fontId' => 'FontId',
        'image'  => 'Image',
        'name'   => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fontId) {
            $res['FontId'] = $this->fontId;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fonts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FontId'])) {
            $model->fontId = $map['FontId'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
