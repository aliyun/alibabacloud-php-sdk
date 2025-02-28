<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class GetFeatureConsistencyCheckJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $config;
    /**
     * @var string
     */
    public $featureConsistencyCheckJobConfigId;
    /**
     * @var string
     */
    public $featureConsistencyCheckJobConfigName;
    /**
     * @var string
     */
    public $gmtEndTime;
    /**
     * @var string
     */
    public $gmtStartTime;
    /**
     * @var string[]
     */
    public $logs;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (\is_array($this->logs)) {
            Model::validateArray($this->logs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->logs)) {
                $res['Logs'] = [];
                $n1          = 0;
                foreach ($this->logs as $item1) {
                    $res['Logs'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
                $model->logs = [];
                $n1          = 0;
                foreach ($map['Logs'] as $item1) {
                    $model->logs[$n1++] = $item1;
                }
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
