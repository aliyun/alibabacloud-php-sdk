<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponseBody\data\backResult;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponseBody\data\frontResult;

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
        'backResult' => 'BackResult',
        'frontResult' => 'FrontResult',
    ];

    public function validate()
    {
        if (null !== $this->backResult) {
            $this->backResult->validate();
        }
        if (null !== $this->frontResult) {
            $this->frontResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backResult) {
            $res['BackResult'] = null !== $this->backResult ? $this->backResult->toArray($noStream) : $this->backResult;
        }

        if (null !== $this->frontResult) {
            $res['FrontResult'] = null !== $this->frontResult ? $this->frontResult->toArray($noStream) : $this->frontResult;
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
        if (isset($map['BackResult'])) {
            $model->backResult = backResult::fromMap($map['BackResult']);
        }

        if (isset($map['FrontResult'])) {
            $model->frontResult = frontResult::fromMap($map['FrontResult']);
        }

        return $model;
    }
}
