<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\GetHdfsCapacityStatisticInfoResponseBody\hdfsCapacityList;
use AlibabaCloud\Tea\Model;

class GetHdfsCapacityStatisticInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var hdfsCapacityList
     */
    public $hdfsCapacityList;
    protected $_name = [
        'requestId'        => 'RequestId',
        'hdfsCapacityList' => 'HdfsCapacityList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->hdfsCapacityList) {
            $res['HdfsCapacityList'] = null !== $this->hdfsCapacityList ? $this->hdfsCapacityList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHdfsCapacityStatisticInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HdfsCapacityList'])) {
            $model->hdfsCapacityList = hdfsCapacityList::fromMap($map['HdfsCapacityList']);
        }

        return $model;
    }
}
