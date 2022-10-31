<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRecordUsageDataResponseBody\recordUsageData;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainRecordUsageDataResponseBody extends Model
{
    /**
     * @var recordUsageData
     */
    public $recordUsageData;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recordUsageData' => 'RecordUsageData',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordUsageData) {
            $res['RecordUsageData'] = null !== $this->recordUsageData ? $this->recordUsageData->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainRecordUsageDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordUsageData'])) {
            $model->recordUsageData = recordUsageData::fromMap($map['RecordUsageData']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
