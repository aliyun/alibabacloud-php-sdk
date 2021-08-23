<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\SDK\Imm\V20170906\Models\GetImageQualityResponseBody\imageQuality;
use AlibabaCloud\Tea\Model;

class GetImageQualityResponseBody extends Model
{
    /**
     * @var string
     */
    public $imageUri;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var imageQuality
     */
    public $imageQuality;
    protected $_name = [
        'imageUri'     => 'ImageUri',
        'requestId'    => 'RequestId',
        'imageQuality' => 'ImageQuality',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUri) {
            $res['ImageUri'] = $this->imageUri;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->imageQuality) {
            $res['ImageQuality'] = null !== $this->imageQuality ? $this->imageQuality->toMap() : null;
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
        if (isset($map['ImageUri'])) {
            $model->imageUri = $map['ImageUri'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ImageQuality'])) {
            $model->imageQuality = imageQuality::fromMap($map['ImageQuality']);
        }

        return $model;
    }
}
