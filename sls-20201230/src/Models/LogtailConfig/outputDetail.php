<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\LogtailConfig;

use AlibabaCloud\Dara\Model;

class outputDetail extends Model
{
    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $logstoreName;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $telemetryType;
    protected $_name = [
        'endpoint' => 'endpoint',
        'logstoreName' => 'logstoreName',
        'region' => 'region',
        'telemetryType' => 'telemetryType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
