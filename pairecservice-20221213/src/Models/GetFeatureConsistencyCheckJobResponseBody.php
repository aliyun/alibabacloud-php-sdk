<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class GetFeatureConsistencyCheckJobResponseBody extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $config;

    /**
     * @example 5
     *
     * @var string
     */
    public $featureConsistencyCheckJobConfigId;

    /**
     * @example feature_consistency_check_1
     *
     * @var string
     */
    public $featureConsistencyCheckJobConfigName;

    /**
     * @example 2021-12-15T23:24:33.132+08:00
     *
     * @var string
     */
    public $gmtEndTime;

    /**
     * @example 2021-12-15T23:24:33.132+08:00
     *
     * @var string
     */
    public $gmtStartTime;

    /**
     * @var string[]
     */
    public $logs;

    /**
     * @example A04CB8C0-E74A-5E83-BC61-64D153574EC7
     *
     * @var string
     */
    public $requestId;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'config'                               => 'Config',
        'featureConsistencyCheckJobConfigId'   => 'FeatureConsistencyCheckJobConfigId',
        'featureConsistencyCheckJobConfigName' => 'FeatureConsistencyCheckJobConfigName',
        'gmtEndTime'                           => 'GmtEndTime',
        'gmtStartTime'                         => 'GmtStartTime',
        'logs'                                 => 'Logs',
        'requestId'                            => 'RequestId',
        'status'                               => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->featureConsistencyCheckJobConfigId) {
            $res['FeatureConsistencyCheckJobConfigId'] = $this->featureConsistencyCheckJobConfigId;
        }
        if (null !== $this->featureConsistencyCheckJobConfigName) {
            $res['FeatureConsistencyCheckJobConfigName'] = $this->featureConsistencyCheckJobConfigName;
        }
        if (null !== $this->gmtEndTime) {
            $res['GmtEndTime'] = $this->gmtEndTime;
        }
        if (null !== $this->gmtStartTime) {
            $res['GmtStartTime'] = $this->gmtStartTime;
        }
        if (null !== $this->logs) {
            $res['Logs'] = $this->logs;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFeatureConsistencyCheckJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['FeatureConsistencyCheckJobConfigId'])) {
            $model->featureConsistencyCheckJobConfigId = $map['FeatureConsistencyCheckJobConfigId'];
        }
        if (isset($map['FeatureConsistencyCheckJobConfigName'])) {
            $model->featureConsistencyCheckJobConfigName = $map['FeatureConsistencyCheckJobConfigName'];
        }
        if (isset($map['GmtEndTime'])) {
            $model->gmtEndTime = $map['GmtEndTime'];
        }
        if (isset($map['GmtStartTime'])) {
            $model->gmtStartTime = $map['GmtStartTime'];
        }
        if (isset($map['Logs'])) {
            if (!empty($map['Logs'])) {
                $model->logs = $map['Logs'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
