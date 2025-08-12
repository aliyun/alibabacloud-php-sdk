<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\CreateLiveAIStudioRequest;

use AlibabaCloud\Dara\Model;

class mattingLayout extends Model
{
    /**
     * @var float
     */
    public $heightNormalized;

    /**
     * @var float
     */
    public $positionX;

    /**
     * @var float
     */
    public $positionY;
    protected $_name = [
        'heightNormalized' => 'HeightNormalized',
        'positionX' => 'PositionX',
        'positionY' => 'PositionY',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->heightNormalized) {
            $res['HeightNormalized'] = $this->heightNormalized;
        }

        if (null !== $this->positionX) {
            $res['PositionX'] = $this->positionX;
        }

        if (null !== $this->positionY) {
            $res['PositionY'] = $this->positionY;
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
        if (isset($map['HeightNormalized'])) {
            $model->heightNormalized = $map['HeightNormalized'];
        }

        if (isset($map['PositionX'])) {
            $model->positionX = $map['PositionX'];
        }

        if (isset($map['PositionY'])) {
            $model->positionY = $map['PositionY'];
        }

        return $model;
    }
}
