<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsControlHistoryResponse\controlInfo;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamsControlHistoryResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var controlInfo
     */
    public $controlInfo;
    protected $_name = [
        'requestId'   => 'RequestId',
        'controlInfo' => 'ControlInfo',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('controlInfo', $this->controlInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->controlInfo) {
            $res['ControlInfo'] = null !== $this->controlInfo ? $this->controlInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamsControlHistoryResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ControlInfo'])) {
            $model->controlInfo = controlInfo::fromMap($map['ControlInfo']);
        }

        return $model;
    }
}
