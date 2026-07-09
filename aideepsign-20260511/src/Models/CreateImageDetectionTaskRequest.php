<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIDeepSign\V20260511\Models;

use AlibabaCloud\Dara\Model;

class CreateImageDetectionTaskRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $credType;

    /**
     * @var string
     */
    public $detectType;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $objectKey;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'credType' => 'CredType',
        'detectType' => 'DetectType',
        'imageUrl' => 'ImageUrl',
        'objectKey' => 'ObjectKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->credType) {
            $res['CredType'] = $this->credType;
        }

        if (null !== $this->detectType) {
            $res['DetectType'] = $this->detectType;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['CredType'])) {
            $model->credType = $map['CredType'];
        }

        if (isset($map['DetectType'])) {
            $model->detectType = $map['DetectType'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['ObjectKey'])) {
            $model->objectKey = $map['ObjectKey'];
        }

        return $model;
    }
}
