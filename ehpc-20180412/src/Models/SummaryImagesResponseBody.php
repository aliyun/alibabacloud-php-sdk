<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class SummaryImagesResponseBody extends Model
{
    /**
     * @var string
     */
    public $imagesName;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imagesName' => 'ImagesName',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imagesName) {
            $res['ImagesName'] = $this->imagesName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SummaryImagesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImagesName'])) {
            $model->imagesName = $map['ImagesName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
