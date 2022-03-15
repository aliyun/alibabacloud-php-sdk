<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;

class ChangeVideoSizeRequest extends Model
{
    /**
     * @var int
     */
    public $b;

    /**
     * @var string
     */
    public $cropType;

    /**
     * @var string
     */
    public $fillType;

    /**
     * @var int
     */
    public $g;

    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $r;

    /**
     * @var float
     */
    public $tightness;

    /**
     * @var string
     */
    public $videoUrl;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'b'         => 'B',
        'cropType'  => 'CropType',
        'fillType'  => 'FillType',
        'g'         => 'G',
        'height'    => 'Height',
        'r'         => 'R',
        'tightness' => 'Tightness',
        'videoUrl'  => 'VideoUrl',
        'width'     => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->b) {
            $res['B'] = $this->b;
        }
        if (null !== $this->cropType) {
            $res['CropType'] = $this->cropType;
        }
        if (null !== $this->fillType) {
            $res['FillType'] = $this->fillType;
        }
        if (null !== $this->g) {
            $res['G'] = $this->g;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->r) {
            $res['R'] = $this->r;
        }
        if (null !== $this->tightness) {
            $res['Tightness'] = $this->tightness;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeVideoSizeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['B'])) {
            $model->b = $map['B'];
        }
        if (isset($map['CropType'])) {
            $model->cropType = $map['CropType'];
        }
        if (isset($map['FillType'])) {
            $model->fillType = $map['FillType'];
        }
        if (isset($map['G'])) {
            $model->g = $map['G'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['R'])) {
            $model->r = $map['R'];
        }
        if (isset($map['Tightness'])) {
            $model->tightness = $map['Tightness'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
