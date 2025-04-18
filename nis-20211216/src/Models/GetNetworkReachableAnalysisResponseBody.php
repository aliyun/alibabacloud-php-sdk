<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;

class GetNetworkReachableAnalysisResponseBody extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $networkPathId;

    /**
     * @var string
     */
    public $networkPathParameter;

    /**
     * @var string
     */
    public $networkReachableAnalysisId;

    /**
     * @var string
     */
    public $networkReachableAnalysisResult;

    /**
     * @var string
     */
    public $networkReachableAnalysisStatus;

    /**
     * @var bool
     */
    public $reachable;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aliUid' => 'AliUid',
        'createTime' => 'CreateTime',
        'networkPathId' => 'NetworkPathId',
        'networkPathParameter' => 'NetworkPathParameter',
        'networkReachableAnalysisId' => 'NetworkReachableAnalysisId',
        'networkReachableAnalysisResult' => 'NetworkReachableAnalysisResult',
        'networkReachableAnalysisStatus' => 'NetworkReachableAnalysisStatus',
        'reachable' => 'Reachable',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->networkPathId) {
            $res['NetworkPathId'] = $this->networkPathId;
        }

        if (null !== $this->networkPathParameter) {
            $res['NetworkPathParameter'] = $this->networkPathParameter;
        }

        if (null !== $this->networkReachableAnalysisId) {
            $res['NetworkReachableAnalysisId'] = $this->networkReachableAnalysisId;
        }

        if (null !== $this->networkReachableAnalysisResult) {
            $res['NetworkReachableAnalysisResult'] = $this->networkReachableAnalysisResult;
        }

        if (null !== $this->networkReachableAnalysisStatus) {
            $res['NetworkReachableAnalysisStatus'] = $this->networkReachableAnalysisStatus;
        }

        if (null !== $this->reachable) {
            $res['Reachable'] = $this->reachable;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['NetworkPathId'])) {
            $model->networkPathId = $map['NetworkPathId'];
        }

        if (isset($map['NetworkPathParameter'])) {
            $model->networkPathParameter = $map['NetworkPathParameter'];
        }

        if (isset($map['NetworkReachableAnalysisId'])) {
            $model->networkReachableAnalysisId = $map['NetworkReachableAnalysisId'];
        }

        if (isset($map['NetworkReachableAnalysisResult'])) {
            $model->networkReachableAnalysisResult = $map['NetworkReachableAnalysisResult'];
        }

        if (isset($map['NetworkReachableAnalysisStatus'])) {
            $model->networkReachableAnalysisStatus = $map['NetworkReachableAnalysisStatus'];
        }

        if (isset($map['Reachable'])) {
            $model->reachable = $map['Reachable'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
