<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoResponseBody\mezzanine;
use AlibabaCloud\Tea\Model;

class GetMezzanineInfoResponseBody extends Model
{
    /**
     * @description The information about the mezzanine file.
     *
     * @var mezzanine
     */
    public $mezzanine;

    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-4AF6-D7393642CA58****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mezzanine' => 'Mezzanine',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mezzanine) {
            $res['Mezzanine'] = null !== $this->mezzanine ? $this->mezzanine->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMezzanineInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mezzanine'])) {
            $model->mezzanine = mezzanine::fromMap($map['Mezzanine']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
