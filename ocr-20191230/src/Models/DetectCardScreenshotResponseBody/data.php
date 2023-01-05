<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\DetectCardScreenshotResponseBody;

use AlibabaCloud\SDK\Ocr\V20191230\Models\DetectCardScreenshotResponseBody\data\spoofResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $isBlur;

    /**
     * @example true
     *
     * @var bool
     */
    public $isCard;

    /**
     * @var spoofResult
     */
    public $spoofResult;
    protected $_name = [
        'isBlur'      => 'IsBlur',
        'isCard'      => 'IsCard',
        'spoofResult' => 'SpoofResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isBlur) {
            $res['IsBlur'] = $this->isBlur;
        }
        if (null !== $this->isCard) {
            $res['IsCard'] = $this->isCard;
        }
        if (null !== $this->spoofResult) {
            $res['SpoofResult'] = null !== $this->spoofResult ? $this->spoofResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsBlur'])) {
            $model->isBlur = $map['IsBlur'];
        }
        if (isset($map['IsCard'])) {
            $model->isCard = $map['IsCard'];
        }
        if (isset($map['SpoofResult'])) {
            $model->spoofResult = spoofResult::fromMap($map['SpoofResult']);
        }

        return $model;
    }
}
