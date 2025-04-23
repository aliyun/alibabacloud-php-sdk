<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListImagesResponseBody\osTags;

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
        'osTags' => 'OsTags',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->osTags) {
            $this->osTags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->osTags) {
            $res['OsTags'] = null !== $this->osTags ? $this->osTags->toArray($noStream) : $this->osTags;
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
        if (isset($map['OsTags'])) {
            $model->osTags = osTags::fromMap($map['OsTags']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
