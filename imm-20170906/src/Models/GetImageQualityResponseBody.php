<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\SDK\Imm\V20170906\Models\GetImageQualityResponseBody\imageQuality;
use AlibabaCloud\Tea\Model;

class GetImageQualityResponseBody extends Model
{
    /**
     * @var imageQuality
     */
    public $imageQuality;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $imageUri;
    protected $_name = [
        'imageQuality' => 'ImageQuality',
        'requestId'    => 'RequestId',
        'imageUri'     => 'ImageUri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageQuality) {
            $res['ImageQuality'] = null !== $this->imageQuality ? $this->imageQuality->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->imageUri) {
            $res['ImageUri'] = $this->imageUri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetImageQualityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageQuality'])) {
            $model->imageQuality = imageQuality::fromMap($map['ImageQuality']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ImageUri'])) {
            $model->imageUri = $map['ImageUri'];
        }

        return $model;
    }
}
