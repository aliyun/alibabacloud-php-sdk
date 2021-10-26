<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListImagesResponseBody\osTags;
use AlibabaCloud\Tea\Model;

class ListImagesResponseBody extends Model
{
    /**
     * @var osTags
     */
    public $osTags;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'osTags'    => 'OsTags',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->osTags) {
            $res['OsTags'] = null !== $this->osTags ? $this->osTags->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListImagesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OsTags'])) {
            $model->osTags = osTags::fromMap($map['OsTags']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
