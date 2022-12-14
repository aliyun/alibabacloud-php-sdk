<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistRequest\targets\video\filterVideo;

use AlibabaCloud\Tea\Model;

class delogos extends Model
{
    /**
     * @var float
     */
    public $duration;

    /**
     * @var float
     */
    public $dx;

    /**
     * @var float
     */
    public $dy;

    /**
     * @var float
     */
    public $height;

    /**
     * @var string
     */
    public $referPos;

    /**
     * @var float
     */
    public $startTime;

    /**
     * @var float
     */
    public $width;
    protected $_name = [
        'duration'  => 'Duration',
        'dx'        => 'Dx',
        'dy'        => 'Dy',
        'height'    => 'Height',
        'referPos'  => 'ReferPos',
        'startTime' => 'StartTime',
        'width'     => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->dx) {
            $res['Dx'] = $this->dx;
        }
        if (null !== $this->dy) {
            $res['Dy'] = $this->dy;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->referPos) {
            $res['ReferPos'] = $this->referPos;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return delogos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Dx'])) {
            $model->dx = $map['Dx'];
        }
        if (isset($map['Dy'])) {
            $model->dy = $map['Dy'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['ReferPos'])) {
            $model->referPos = $map['ReferPos'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
