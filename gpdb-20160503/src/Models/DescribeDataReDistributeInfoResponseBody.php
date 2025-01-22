<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataReDistributeInfoResponseBody\dataReDistributeInfo;

class DescribeDataReDistributeInfoResponseBody extends Model
{
    /**
     * @var dataReDistributeInfo
     */
    public $dataReDistributeInfo;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataReDistributeInfo' => 'DataReDistributeInfo',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->dataReDistributeInfo) {
            $this->dataReDistributeInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataReDistributeInfo) {
            $res['DataReDistributeInfo'] = null !== $this->dataReDistributeInfo ? $this->dataReDistributeInfo->toArray($noStream) : $this->dataReDistributeInfo;
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
        if (isset($map['DataReDistributeInfo'])) {
            $model->dataReDistributeInfo = dataReDistributeInfo::fromMap($map['DataReDistributeInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
