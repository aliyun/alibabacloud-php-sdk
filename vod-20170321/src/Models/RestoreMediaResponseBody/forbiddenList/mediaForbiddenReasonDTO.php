<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\RestoreMediaResponseBody\forbiddenList;

use AlibabaCloud\Tea\Model;

class mediaForbiddenReasonDTO extends Model
{
    /**
     * @description The ID of the media asset.
     *
     * @example fa10ee70898671edb99f6eb3690d****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The reason for the failure.
     *
     * @example Forbidden.RestoreMedia
     *
     * @var string
     */
    public $reason;
    protected $_name = [
        'mediaId' => 'MediaId',
        'reason'  => 'Reason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaForbiddenReasonDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
