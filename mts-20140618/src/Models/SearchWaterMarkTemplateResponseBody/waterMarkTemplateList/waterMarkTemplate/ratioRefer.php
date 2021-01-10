<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SearchWaterMarkTemplateResponseBody\waterMarkTemplateList\waterMarkTemplate;

use AlibabaCloud\Tea\Model;

class ratioRefer extends Model
{
    /**
     * @var string
     */
    public $dx;

    /**
     * @var string
     */
    public $width;

    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $dy;
    protected $_name = [
        'dx'     => 'Dx',
        'width'  => 'Width',
        'height' => 'Height',
        'dy'     => 'Dy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dx) {
            $res['Dx'] = $this->dx;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->dy) {
            $res['Dy'] = $this->dy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ratioRefer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dx'])) {
            $model->dx = $map['Dx'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Dy'])) {
            $model->dy = $map['Dy'];
        }

        return $model;
    }
}
