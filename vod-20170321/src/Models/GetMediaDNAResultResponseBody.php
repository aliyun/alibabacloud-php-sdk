<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponseBody\DNAResult;
use AlibabaCloud\Tea\Model;

class GetMediaDNAResultResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var DNAResult
     */
    public $DNAResult;
    protected $_name = [
        'requestId' => 'RequestId',
        'DNAResult' => 'DNAResult',
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
        if (null !== $this->DNAResult) {
            $res['DNAResult'] = null !== $this->DNAResult ? $this->DNAResult->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DNAResult'])) {
            $model->DNAResult = DNAResult::fromMap($map['DNAResult']);
        }

        return $model;
    }
}
