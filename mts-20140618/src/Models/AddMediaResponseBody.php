<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddMediaResponseBody\media;

class AddMediaResponseBody extends Model
{
    /**
     * @var media
     */
    public $media;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'media' => 'Media',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->media) {
            $this->media->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->media) {
            $res['Media'] = null !== $this->media ? $this->media->toArray($noStream) : $this->media;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Media'])) {
            $model->media = media::fromMap($map['Media']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
