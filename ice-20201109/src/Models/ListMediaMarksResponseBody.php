<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListMediaMarksResponseBody extends Model
{
    /**
     * @description The ID of the media asset.
     *
     * @example ******b48fb04483915d4f2cd8******
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The marks of the media asset, in the JSONArray format.
     *
     * @var string
     */
    public $mediaMarks;

    /**
     * @description The request ID.
     *
     * @example ******11-DB8D-4A9A-875B-275798******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaId' => 'MediaId',
        'mediaMarks' => 'MediaMarks',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->mediaMarks) {
            $res['MediaMarks'] = $this->mediaMarks;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMediaMarksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaMarks'])) {
            $model->mediaMarks = $map['MediaMarks'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
