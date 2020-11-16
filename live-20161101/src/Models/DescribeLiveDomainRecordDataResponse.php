<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRecordDataResponse\recordDataInfos;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainRecordDataResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var recordDataInfos
     */
    public $recordDataInfos;
    protected $_name = [
        'requestId'       => 'RequestId',
        'recordDataInfos' => 'RecordDataInfos',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('recordDataInfos', $this->recordDataInfos, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->recordDataInfos) {
            $res['RecordDataInfos'] = null !== $this->recordDataInfos ? $this->recordDataInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainRecordDataResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RecordDataInfos'])) {
            $model->recordDataInfos = recordDataInfos::fromMap($map['RecordDataInfos']);
        }

        return $model;
    }
}
