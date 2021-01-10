<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaResponseBody\media;
use AlibabaCloud\Tea\Model;

class UpdateMediaResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var media
     */
    public $media;
    protected $_name = [
        'requestId' => 'RequestId',
        'media'     => 'Media',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->media) {
            $res['Media'] = null !== $this->media ? $this->media->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMediaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Media'])) {
            $model->media = media::fromMap($map['Media']);
        }

        return $model;
    }
}
