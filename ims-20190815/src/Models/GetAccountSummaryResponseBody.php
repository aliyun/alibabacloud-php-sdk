<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSummaryResponseBody\summaryMap;

class GetAccountSummaryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var summaryMap
     */
    public $summaryMap;
    protected $_name = [
        'requestId'  => 'RequestId',
        'summaryMap' => 'SummaryMap',
    ];

    public function validate()
    {
        if (null !== $this->summaryMap) {
            $this->summaryMap->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->summaryMap) {
            $res['SummaryMap'] = null !== $this->summaryMap ? $this->summaryMap->toArray($noStream) : $this->summaryMap;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SummaryMap'])) {
            $model->summaryMap = summaryMap::fromMap($map['SummaryMap']);
        }

        return $model;
    }
}
