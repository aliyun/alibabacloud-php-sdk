<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoResponseBody\domainTranscodeList;

class DescribeLiveStreamTranscodeInfoResponseBody extends Model
{
    /**
     * @var domainTranscodeList
     */
    public $domainTranscodeList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainTranscodeList' => 'DomainTranscodeList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->domainTranscodeList) {
            $this->domainTranscodeList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainTranscodeList) {
            $res['DomainTranscodeList'] = null !== $this->domainTranscodeList ? $this->domainTranscodeList->toArray($noStream) : $this->domainTranscodeList;
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
        if (isset($map['DomainTranscodeList'])) {
            $model->domainTranscodeList = domainTranscodeList::fromMap($map['DomainTranscodeList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
