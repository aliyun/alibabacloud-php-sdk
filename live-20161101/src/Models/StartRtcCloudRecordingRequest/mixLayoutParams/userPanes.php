<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\mixLayoutParams;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\mixLayoutParams\userPanes\subBackground;

class userPanes extends Model
{
    /**
     * @var string
     */
    public $height;

    /**
     * @var int
     */
    public $sourceType;

    /**
     * @var subBackground
     */
    public $subBackground;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $width;

    /**
     * @var string
     */
    public $x;

    /**
     * @var string
     */
    public $y;

    /**
     * @var int
     */
    public $ZOrder;
    protected $_name = [
        'height' => 'Height',
        'sourceType' => 'SourceType',
        'subBackground' => 'SubBackground',
        'userId' => 'UserId',
        'width' => 'Width',
        'x' => 'X',
        'y' => 'Y',
        'ZOrder' => 'ZOrder',
    ];

    public function validate()
    {
        if (null !== $this->subBackground) {
            $this->subBackground->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->subBackground) {
            $res['SubBackground'] = null !== $this->subBackground ? $this->subBackground->toArray($noStream) : $this->subBackground;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        if (null !== $this->x) {
            $res['X'] = $this->x;
        }

        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }

        if (null !== $this->ZOrder) {
            $res['ZOrder'] = $this->ZOrder;
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
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['SubBackground'])) {
            $model->subBackground = subBackground::fromMap($map['SubBackground']);
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        if (isset($map['X'])) {
            $model->x = $map['X'];
        }

        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }

        if (isset($map['ZOrder'])) {
            $model->ZOrder = $map['ZOrder'];
        }

        return $model;
    }
}
