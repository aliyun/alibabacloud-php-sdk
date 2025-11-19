<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models;

use AlibabaCloud\Dara\Model;

class DeleteDesktopImageRequest extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var bool
     */
    public $isCleanImageCode;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'imageId' => 'ImageId',
        'isCleanImageCode' => 'IsCleanImageCode',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->isCleanImageCode) {
            $res['IsCleanImageCode'] = $this->isCleanImageCode;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['IsCleanImageCode'])) {
            $model->isCleanImageCode = $map['IsCleanImageCode'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
