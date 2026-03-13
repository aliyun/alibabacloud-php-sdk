<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetVideoSegmentationTaskStatusResponseBody;

use AlibabaCloud\Dara\Model;

class usage extends Model
{
    /**
     * @var int
     */
    public $audioToken;

    /**
     * @var int
     */
    public $imageToken;
    protected $_name = [
        'audioToken' => 'audio_token',
        'imageToken' => 'image_token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioToken) {
            $res['audio_token'] = $this->audioToken;
        }

        if (null !== $this->imageToken) {
            $res['image_token'] = $this->imageToken;
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
        if (isset($map['audio_token'])) {
            $model->audioToken = $map['audio_token'];
        }

        if (isset($map['image_token'])) {
            $model->imageToken = $map['image_token'];
        }

        return $model;
    }
}
