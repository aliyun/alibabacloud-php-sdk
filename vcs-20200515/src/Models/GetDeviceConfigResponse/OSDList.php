<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetDeviceConfigResponse;

use AlibabaCloud\Tea\Model;

class OSDList extends Model
{
    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $leftTopX;

    /**
     * @var string
     */
    public $leftTopY;
    protected $_name = [
        'text'     => 'Text',
        'leftTopX' => 'LeftTopX',
        'leftTopY' => 'LeftTopY',
    ];

    public function validate()
    {
        Model::validateRequired('text', $this->text, true);
        Model::validateRequired('leftTopX', $this->leftTopX, true);
        Model::validateRequired('leftTopY', $this->leftTopY, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
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
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }

        return $model;
    }
}
