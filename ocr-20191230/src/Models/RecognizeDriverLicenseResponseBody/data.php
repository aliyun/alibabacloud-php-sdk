<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDriverLicenseResponseBody;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDriverLicenseResponseBody\data\backResult;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDriverLicenseResponseBody\data\faceResult;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backResult) {
            $res['BackResult'] = null !== $this->backResult ? $this->backResult->toMap() : null;
        }
        if (null !== $this->faceResult) {
            $res['FaceResult'] = null !== $this->faceResult ? $this->faceResult->toMap() : null;
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
        if (isset($map['FaceResult'])) {
            $model->faceResult = faceResult::fromMap($map['FaceResult']);
        }

        return $model;
    }
}
