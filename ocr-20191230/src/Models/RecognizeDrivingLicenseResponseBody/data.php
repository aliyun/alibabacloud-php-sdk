<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDrivingLicenseResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDrivingLicenseResponseBody\data\backResult;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDrivingLicenseResponseBody\data\faceResult;

class data extends Model
{
    /**
     * @var backResult
     */
    public $backResult;

    /**
     * @var faceResult
     */
    public $faceResult;
    protected $_name = [
        'backResult' => 'BackResult',
        'faceResult' => 'FaceResult',
    ];

    public function validate()
    {
        if (null !== $this->backResult) {
            $this->backResult->validate();
        }
        if (null !== $this->faceResult) {
            $this->faceResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backResult) {
            $res['BackResult'] = null !== $this->backResult ? $this->backResult->toArray($noStream) : $this->backResult;
        }

        if (null !== $this->faceResult) {
            $res['FaceResult'] = null !== $this->faceResult ? $this->faceResult->toArray($noStream) : $this->faceResult;
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

        if (isset($map['FaceResult'])) {
            $model->faceResult = faceResult::fromMap($map['FaceResult']);
        }

        return $model;
    }
}
