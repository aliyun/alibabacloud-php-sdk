<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponseBody\DNAResult;
use AlibabaCloud\Tea\Model;

class GetMediaDNAResultResponseBody extends Model
{
    /**
     * @description The media fingerprinting results.
     *
     * @var DNAResult
     */
    public $DNAResult;

    /**
     * @description The ID of the request.
     *
     * @example 63FC4896-E956-4B*****7D-134FF1BC597A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DNAResult' => 'DNAResult',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DNAResult) {
            $res['DNAResult'] = null !== $this->DNAResult ? $this->DNAResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMediaDNAResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DNAResult'])) {
            $model->DNAResult = DNAResult::fromMap($map['DNAResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
