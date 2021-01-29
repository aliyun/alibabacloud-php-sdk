<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponseBody;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponseBody\data\backResult;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponseBody\data\frontResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var backResult
     */
    public $backResult;

    /**
     * @var frontResult
     */
    public $frontResult;
    protected $_name = [
        'backResult'  => 'BackResult',
        'frontResult' => 'FrontResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backResult) {
            $res['BackResult'] = null !== $this->backResult ? $this->backResult->toMap() : null;
        }
        if (null !== $this->frontResult) {
            $res['FrontResult'] = null !== $this->frontResult ? $this->frontResult->toMap() : null;
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
        if (isset($map['BackResult'])) {
            $model->backResult = backResult::fromMap($map['BackResult']);
        }
        if (isset($map['FrontResult'])) {
            $model->frontResult = frontResult::fromMap($map['FrontResult']);
        }

        return $model;
    }
}
