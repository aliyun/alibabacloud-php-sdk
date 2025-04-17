<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListSnapshotsResponseBody\mediaSnapshot;

class ListSnapshotsResponseBody extends Model
{
    /**
     * @var mediaSnapshot
     */
    public $mediaSnapshot;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaSnapshot' => 'MediaSnapshot',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->mediaSnapshot) {
            $this->mediaSnapshot->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaSnapshot) {
            $res['MediaSnapshot'] = null !== $this->mediaSnapshot ? $this->mediaSnapshot->toArray($noStream) : $this->mediaSnapshot;
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
        if (isset($map['MediaSnapshot'])) {
            $model->mediaSnapshot = mediaSnapshot::fromMap($map['MediaSnapshot']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
