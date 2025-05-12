<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\openingList;

use AlibabaCloud\Dara\Model;

class opening extends Model
{
    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $start;

    /**
     * @var string
     */
    public $width;

    /**
     * @var string
     */
    public $openUrl;
    protected $_name = [
        'height' => 'Height',
        'start' => 'Start',
        'width' => 'Width',
        'openUrl' => 'openUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        if (null !== $this->openUrl) {
            $res['openUrl'] = $this->openUrl;
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

        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        if (isset($map['openUrl'])) {
            $model->openUrl = $map['openUrl'];
        }

        return $model;
    }
}
