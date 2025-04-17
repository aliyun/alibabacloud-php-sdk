<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponseBody\DNAResult;

class GetMediaDNAResultResponseBody extends Model
{
    /**
     * @var DNAResult
     */
    public $DNAResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DNAResult' => 'DNAResult',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->DNAResult) {
            $this->DNAResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DNAResult) {
            $res['DNAResult'] = null !== $this->DNAResult ? $this->DNAResult->toArray($noStream) : $this->DNAResult;
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
        if (isset($map['DNAResult'])) {
            $model->DNAResult = DNAResult::fromMap($map['DNAResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
