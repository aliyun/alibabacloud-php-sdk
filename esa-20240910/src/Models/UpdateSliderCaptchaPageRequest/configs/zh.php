<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSliderCaptchaPageRequest\configs;

use AlibabaCloud\Dara\Model;

class zh extends Model
{
    /**
     * @var bool
     */
    public $showFooter;

    /**
     * @var bool
     */
    public $showRequestId;

    /**
     * @var string
     */
    public $sliderColor;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'showFooter' => 'ShowFooter',
        'showRequestId' => 'ShowRequestId',
        'sliderColor' => 'SliderColor',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->showFooter) {
            $res['ShowFooter'] = $this->showFooter;
        }

        if (null !== $this->showRequestId) {
            $res['ShowRequestId'] = $this->showRequestId;
        }

        if (null !== $this->sliderColor) {
            $res['SliderColor'] = $this->sliderColor;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['ShowFooter'])) {
            $model->showFooter = $map['ShowFooter'];
        }

        if (isset($map['ShowRequestId'])) {
            $model->showRequestId = $map['ShowRequestId'];
        }

        if (isset($map['SliderColor'])) {
            $model->sliderColor = $map['SliderColor'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
