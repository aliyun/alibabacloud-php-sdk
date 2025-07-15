<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoResponseBody\domainTranscodeList;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamTranscodeInfoResponseBody extends Model
{
    /**
     * @description The transcoding configurations.
     *
     * @var domainTranscodeList
     */
    public $domainTranscodeList;

    /**
     * @description The request ID.
     *
     * @example 62136AE6-7793-45ED-B14A-60D19A9486D3
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainTranscodeList' => 'DomainTranscodeList',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainTranscodeList) {
            $res['DomainTranscodeList'] = null !== $this->domainTranscodeList ? $this->domainTranscodeList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamTranscodeInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainTranscodeList'])) {
            $model->domainTranscodeList = domainTranscodeList::fromMap($map['DomainTranscodeList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
