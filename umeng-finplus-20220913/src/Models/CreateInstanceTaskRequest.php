<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20220913\Models;

use AlibabaCloud\Dara\Model;

class CreateInstanceTaskRequest extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $calbackUrl;

    /**
     * @var int
     */
    public $clientId;

    /**
     * @var string
     */
    public $datasetIds;

    /**
     * @var string
     */
    public $monitorType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $outputConfig;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scoreStrategyConfig;
    protected $_name = [
        'appId' => 'AppId',
        'calbackUrl' => 'CalbackUrl',
        'clientId' => 'ClientId',
        'datasetIds' => 'DatasetIds',
        'monitorType' => 'MonitorType',
        'name' => 'Name',
        'outputConfig' => 'OutputConfig',
        'requestId' => 'RequestId',
        'scoreStrategyConfig' => 'ScoreStrategyConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->calbackUrl) {
            $res['CalbackUrl'] = $this->calbackUrl;
        }

        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->datasetIds) {
            $res['DatasetIds'] = $this->datasetIds;
        }

        if (null !== $this->monitorType) {
            $res['MonitorType'] = $this->monitorType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = $this->outputConfig;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scoreStrategyConfig) {
            $res['ScoreStrategyConfig'] = $this->scoreStrategyConfig;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['CalbackUrl'])) {
            $model->calbackUrl = $map['CalbackUrl'];
        }

        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['DatasetIds'])) {
            $model->datasetIds = $map['DatasetIds'];
        }

        if (isset($map['MonitorType'])) {
            $model->monitorType = $map['MonitorType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OutputConfig'])) {
            $model->outputConfig = $map['OutputConfig'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ScoreStrategyConfig'])) {
            $model->scoreStrategyConfig = $map['ScoreStrategyConfig'];
        }

        return $model;
    }
}
