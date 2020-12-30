<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoResponseBody\mezzanine;
use AlibabaCloud\Tea\Model;

class GetMezzanineInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mezzanine
     */
    public $mezzanine;
    protected $_name = [
        'requestId' => 'RequestId',
        'mezzanine' => 'Mezzanine',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->mezzanine) {
            $res['Mezzanine'] = null !== $this->mezzanine ? $this->mezzanine->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Mezzanine'])) {
            $model->mezzanine = mezzanine::fromMap($map['Mezzanine']);
        }

        return $model;
    }
}
