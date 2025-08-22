<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnBlockedRegionsResponseBody\infoList;

class DescribeDcdnBlockedRegionsResponseBody extends Model
{
    /**
     * @var infoList
     */
    public $infoList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'infoList' => 'InfoList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->infoList) {
            $this->infoList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->infoList) {
            $res['InfoList'] = null !== $this->infoList ? $this->infoList->toArray($noStream) : $this->infoList;
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
        if (isset($map['InfoList'])) {
            $model->infoList = infoList::fromMap($map['InfoList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
