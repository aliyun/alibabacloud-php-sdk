<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class SummaryImagesInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $imagesInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imagesInfo' => 'ImagesInfo',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imagesInfo) {
            $res['ImagesInfo'] = $this->imagesInfo;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SummaryImagesInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImagesInfo'])) {
            $model->imagesInfo = $map['ImagesInfo'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
