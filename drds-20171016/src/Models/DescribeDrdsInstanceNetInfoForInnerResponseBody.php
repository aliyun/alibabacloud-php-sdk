<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models;

use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsInstanceNetInfoForInnerResponseBody\netInfos;
use AlibabaCloud\Tea\Model;

class DescribeDrdsInstanceNetInfoForInnerResponseBody extends Model
{
    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var netInfos
     */
    public $netInfos;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'drdsInstanceId' => 'DrdsInstanceId',
        'netInfos'       => 'NetInfos',
        'networkType'    => 'NetworkType',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->netInfos) {
            $res['NetInfos'] = null !== $this->netInfos ? $this->netInfos->toMap() : null;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDrdsInstanceNetInfoForInnerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['NetInfos'])) {
            $model->netInfos = netInfos::fromMap($map['NetInfos']);
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
