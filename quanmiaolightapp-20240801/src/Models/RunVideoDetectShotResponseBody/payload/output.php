<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoDetectShotResponseBody\payload;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoDetectShotResponseBody\payload\output\videoSplitResult;

class output extends Model
{
    /**
     * @var videoSplitResult
     */
    public $videoSplitResult;
    protected $_name = [
        'videoSplitResult' => 'videoSplitResult',
    ];

    public function validate()
    {
        if (null !== $this->videoSplitResult) {
            $this->videoSplitResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->videoSplitResult) {
            $res['videoSplitResult'] = null !== $this->videoSplitResult ? $this->videoSplitResult->toArray($noStream) : $this->videoSplitResult;
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
        if (isset($map['videoSplitResult'])) {
            $model->videoSplitResult = videoSplitResult::fromMap($map['videoSplitResult']);
        }

        return $model;
    }
}
