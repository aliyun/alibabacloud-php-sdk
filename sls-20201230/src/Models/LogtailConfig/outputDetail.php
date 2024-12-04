<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\LogtailConfig;

use AlibabaCloud\Tea\Model;

class outputDetail extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou-intranet.log.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description This parameter is required.
     *
     * @example test-logstore
     *
     * @var string
     */
    public $logstoreName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @example logs
     *
     * @var string
     */
    public $telemetryType;
    protected $_name = [
        'endpoint'      => 'endpoint',
        'logstoreName'  => 'logstoreName',
        'region'        => 'region',
        'telemetryType' => 'telemetryType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->logstoreName) {
            $res['logstoreName'] = $this->logstoreName;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->telemetryType) {
            $res['telemetryType'] = $this->telemetryType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['logstoreName'])) {
            $model->logstoreName = $map['logstoreName'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['telemetryType'])) {
            $model->telemetryType = $map['telemetryType'];
        }

        return $model;
    }
}
