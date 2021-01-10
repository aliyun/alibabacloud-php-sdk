<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoResponseBody\domainTranscodeList;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamTranscodeInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var domainTranscodeList
     */
    public $domainTranscodeList;
    protected $_name = [
        'requestId'           => 'RequestId',
        'domainTranscodeList' => 'DomainTranscodeList',
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
        if (null !== $this->domainTranscodeList) {
            $res['DomainTranscodeList'] = null !== $this->domainTranscodeList ? $this->domainTranscodeList->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainTranscodeList'])) {
            $model->domainTranscodeList = domainTranscodeList::fromMap($map['DomainTranscodeList']);
        }

        return $model;
    }
}
