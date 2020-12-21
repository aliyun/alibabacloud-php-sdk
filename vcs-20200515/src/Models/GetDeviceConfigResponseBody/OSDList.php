<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetDeviceConfigResponseBody;

use AlibabaCloud\Tea\Model;

class OSDList extends Model
{
    /**
     * @var string
     */
    public $leftTopX;

    /**
     * @var string
     */
    public $leftTopY;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'leftTopX' => 'LeftTopX',
        'leftTopY' => 'LeftTopY',
        'text'     => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OSDList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
