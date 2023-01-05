<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\DetectCardScreenshotResponseBody\data\spoofResult;

use AlibabaCloud\Tea\Model;

class resultMap extends Model
{
    /**
     * @example 99.99965944391533
     *
     * @var float
     */
    public $screenScore;

    /**
     * @example 90
     *
     * @var float
     */
    public $screenThreshold;
    protected $_name = [
        'screenScore'     => 'ScreenScore',
        'screenThreshold' => 'ScreenThreshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->screenScore) {
            $res['ScreenScore'] = $this->screenScore;
        }
        if (null !== $this->screenThreshold) {
            $res['ScreenThreshold'] = $this->screenThreshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultMap
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScreenScore'])) {
            $model->screenScore = $map['ScreenScore'];
        }
        if (isset($map['ScreenThreshold'])) {
            $model->screenThreshold = $map['ScreenThreshold'];
        }

        return $model;
    }
}
