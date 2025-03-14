<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\CreateMediaLiveChannelRequest\inputAttachments\audioSelectors;

use AlibabaCloud\Tea\Model;

class audioTrackSelection extends Model
{
    /**
     * @description Specify one or more audio tracks from within a source using Track ID.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $trackId;
    protected $_name = [
        'trackId' => 'TrackId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->trackId) {
            $res['TrackId'] = $this->trackId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audioTrackSelection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TrackId'])) {
            $model->trackId = $map['TrackId'];
        }

        return $model;
    }
}
