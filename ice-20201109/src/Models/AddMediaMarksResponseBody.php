<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class AddMediaMarksResponseBody extends Model
{
    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $mediaMarkIds;

    /**
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
