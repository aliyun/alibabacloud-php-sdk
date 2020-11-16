<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordIndexFileResponse\recordIndexInfo;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamRecordIndexFileResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var recordIndexInfo
     */
    public $recordIndexInfo;
    protected $_name = [
        'requestId'       => 'RequestId',
        'recordIndexInfo' => 'RecordIndexInfo',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('recordIndexInfo', $this->recordIndexInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->recordIndexInfo) {
            $res['RecordIndexInfo'] = null !== $this->recordIndexInfo ? $this->recordIndexInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamRecordIndexFileResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RecordIndexInfo'])) {
            $model->recordIndexInfo = recordIndexInfo::fromMap($map['RecordIndexInfo']);
        }

        return $model;
    }
}
