<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models;

use AlibabaCloud\Dara\Model;

class CreateEduHomeworkCorrectSubmitRequest extends Model
{
    /**
     * @var bool
     */
    public $dewarp;

    /**
     * @var string
     */
    public $imageBase64;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dewarp' => 'dewarp',
        'imageBase64' => 'imageBase64',
        'imageUrl' => 'imageUrl',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dewarp) {
            $res['dewarp'] = $this->dewarp;
        }

        if (null !== $this->imageBase64) {
            $res['imageBase64'] = $this->imageBase64;
        }

        if (null !== $this->imageUrl) {
            $res['imageUrl'] = $this->imageUrl;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['dewarp'])) {
            $model->dewarp = $map['dewarp'];
        }

        if (isset($map['imageBase64'])) {
            $model->imageBase64 = $map['imageBase64'];
        }

        if (isset($map['imageUrl'])) {
            $model->imageUrl = $map['imageUrl'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
