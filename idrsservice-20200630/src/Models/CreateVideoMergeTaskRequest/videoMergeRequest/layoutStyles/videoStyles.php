<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateVideoMergeTaskRequest\videoMergeRequest\layoutStyles;

use AlibabaCloud\Tea\Model;

class videoStyles extends Model
{
    /**
     * @example http://xxx.xxx
     *
     * @var string
     */
    public $fileName;

    /**
     * @example 888
     *
     * @var int
     */
    public $height;

    /**
     * @example 100
     *
     * @var int
     */
    public $positionX;

    /**
     * @example 400
     *
     * @var int
     */
    public $positionY;

    /**
     * @example 100
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'fileName'  => 'FileName',
        'height'    => 'Height',
        'positionX' => 'PositionX',
        'positionY' => 'PositionY',
        'width'     => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->positionX) {
            $res['PositionX'] = $this->positionX;
        }
        if (null !== $this->positionY) {
            $res['PositionY'] = $this->positionY;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoStyles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['PositionX'])) {
            $model->positionX = $map['PositionX'];
        }
        if (isset($map['PositionY'])) {
            $model->positionY = $map['PositionY'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
