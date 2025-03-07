<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class AddMediaMarksResponseBody extends Model
{
    /**
     * @description The ID of the media asset.
     *
     * @example 53afdf003a******6a16b5feac6402
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The IDs of the marks that are added.
     *
     * @example mark-f82d*****4994b0915948ef7e16,mark-3d56d*****4c8fa9ae2a1f9e5d2d60
     *
     * @var string
     */
    public $mediaMarkIds;

    /**
     * @description The request ID.
     *
     * @example 771A1414-27BF-53E6-AB73-EFCB*****ACF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaId'      => 'MediaId',
        'mediaMarkIds' => 'MediaMarkIds',
        'requestId'    => 'RequestId',
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
        if (null !== $this->mediaMarkIds) {
            $res['MediaMarkIds'] = $this->mediaMarkIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddMediaMarksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaMarkIds'])) {
            $model->mediaMarkIds = $map['MediaMarkIds'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
