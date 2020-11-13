<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\DetectCardScreenshotResponse;

use AlibabaCloud\SDK\Ocr\V20191230\Models\DetectCardScreenshotResponse\data\spoofResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $isCard;

    /**
     * @var bool
     */
    public $isBlur;

    /**
     * @var spoofResult
     */
    public $spoofResult;
    protected $_name = [
        'isCard'      => 'IsCard',
        'isBlur'      => 'IsBlur',
        'spoofResult' => 'SpoofResult',
    ];

    public function validate()
    {
        Model::validateRequired('isCard', $this->isCard, true);
        Model::validateRequired('isBlur', $this->isBlur, true);
        Model::validateRequired('spoofResult', $this->spoofResult, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isCard) {
            $res['IsCard'] = $this->isCard;
        }
        if (null !== $this->isBlur) {
            $res['IsBlur'] = $this->isBlur;
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
        if (isset($map['IsCard'])) {
            $model->isCard = $map['IsCard'];
        }
        if (isset($map['IsBlur'])) {
            $model->isBlur = $map['IsBlur'];
        }
        if (isset($map['SpoofResult'])) {
            $model->spoofResult = spoofResult::fromMap($map['SpoofResult']);
        }

        return $model;
    }
}
