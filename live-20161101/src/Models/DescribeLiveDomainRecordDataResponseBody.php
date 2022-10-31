<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRecordDataResponseBody\recordDataInfos;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainRecordDataResponseBody extends Model
{
    /**
     * @var recordDataInfos
     */
    public $recordDataInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recordDataInfos' => 'RecordDataInfos',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordDataInfos) {
            $res['RecordDataInfos'] = null !== $this->recordDataInfos ? $this->recordDataInfos->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainRecordDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordDataInfos'])) {
            $model->recordDataInfos = recordDataInfos::fromMap($map['RecordDataInfos']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
