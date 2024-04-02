<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserStatusResponseBody extends Model
{
    /**
     * @var int
     */
    public $agreeChannel;

    /**
     * @var bool
     */
    public $buyed;

    /**
     * @var bool
     */
    public $inDept;

    /**
     * @var string
     */
    public $openApiBeginTime;

    /**
     * @var bool
     */
    public $openApiUsed;

    /**
     * @var string
     */
    public $ossCheckStatus;

    /**
     * @var int
     */
    public $ossVideoSizeLimit;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'agreeChannel'      => 'AgreeChannel',
        'buyed'             => 'Buyed',
        'inDept'            => 'InDept',
        'openApiBeginTime'  => 'OpenApiBeginTime',
        'openApiUsed'       => 'OpenApiUsed',
        'ossCheckStatus'    => 'OssCheckStatus',
        'ossVideoSizeLimit' => 'OssVideoSizeLimit',
        'requestId'         => 'RequestId',
        'uid'               => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agreeChannel) {
            $res['AgreeChannel'] = $this->agreeChannel;
        }
        if (null !== $this->buyed) {
            $res['Buyed'] = $this->buyed;
        }
        if (null !== $this->inDept) {
            $res['InDept'] = $this->inDept;
        }
        if (null !== $this->openApiBeginTime) {
            $res['OpenApiBeginTime'] = $this->openApiBeginTime;
        }
        if (null !== $this->openApiUsed) {
            $res['OpenApiUsed'] = $this->openApiUsed;
        }
        if (null !== $this->ossCheckStatus) {
            $res['OssCheckStatus'] = $this->ossCheckStatus;
        }
        if (null !== $this->ossVideoSizeLimit) {
            $res['OssVideoSizeLimit'] = $this->ossVideoSizeLimit;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgreeChannel'])) {
            $model->agreeChannel = $map['AgreeChannel'];
        }
        if (isset($map['Buyed'])) {
            $model->buyed = $map['Buyed'];
        }
        if (isset($map['InDept'])) {
            $model->inDept = $map['InDept'];
        }
        if (isset($map['OpenApiBeginTime'])) {
            $model->openApiBeginTime = $map['OpenApiBeginTime'];
        }
        if (isset($map['OpenApiUsed'])) {
            $model->openApiUsed = $map['OpenApiUsed'];
        }
        if (isset($map['OssCheckStatus'])) {
            $model->ossCheckStatus = $map['OssCheckStatus'];
        }
        if (isset($map['OssVideoSizeLimit'])) {
            $model->ossVideoSizeLimit = $map['OssVideoSizeLimit'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
