<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\DetectCardScreenshotResponseBody\data\spoofResult;

use AlibabaCloud\Tea\Model;

class resultMap extends Model
{
    /**
     * @var float
     */
    public $screenThreshold;

    /**
     * @var float
     */
    public $screenScore;
    protected $_name = [
        'screenThreshold' => 'ScreenThreshold',
        'screenScore'     => 'ScreenScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->screenThreshold) {
            $res['ScreenThreshold'] = $this->screenThreshold;
        }
        if (null !== $this->screenScore) {
            $res['ScreenScore'] = $this->screenScore;
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
        if (isset($map['ScreenThreshold'])) {
            $model->screenThreshold = $map['ScreenThreshold'];
        }
        if (isset($map['ScreenScore'])) {
            $model->screenScore = $map['ScreenScore'];
        }

        return $model;
    }
}
