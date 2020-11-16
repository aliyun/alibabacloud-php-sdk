<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePullStreamConfigResponse\liveAppRecordList;
use AlibabaCloud\Tea\Model;

class DescribeLivePullStreamConfigResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var liveAppRecordList
     */
    public $liveAppRecordList;
    protected $_name = [
        'requestId'         => 'RequestId',
        'liveAppRecordList' => 'LiveAppRecordList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('liveAppRecordList', $this->liveAppRecordList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->liveAppRecordList) {
            $res['LiveAppRecordList'] = null !== $this->liveAppRecordList ? $this->liveAppRecordList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLivePullStreamConfigResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LiveAppRecordList'])) {
            $model->liveAppRecordList = liveAppRecordList::fromMap($map['LiveAppRecordList']);
        }

        return $model;
    }
}
