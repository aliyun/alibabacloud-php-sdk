<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListSnapshotsResponseBody\mediaSnapshot;
use AlibabaCloud\Tea\Model;

class ListSnapshotsResponseBody extends Model
{
    /**
     * @description The snapshot data of the media.
     *
     * @var mediaSnapshot
     */
    public $mediaSnapshot;

    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-4AF6-D7393642CA58****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaSnapshot' => 'MediaSnapshot',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaSnapshot) {
            $res['MediaSnapshot'] = null !== $this->mediaSnapshot ? $this->mediaSnapshot->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSnapshotsResponseBody
     */
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
