<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\CreateScriptVersionRequest\scriptProfile;

use AlibabaCloud\Dara\Model;

class functionMeta extends Model
{
    /**
     * @var string
     */
    public $functionId;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $httpTriggerName;

    /**
     * @var string
     */
    public $httpTriggerUrl;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'functionId' => 'FunctionId',
        'functionName' => 'FunctionName',
        'httpTriggerName' => 'HttpTriggerName',
        'httpTriggerUrl' => 'HttpTriggerUrl',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->functionId) {
            $res['FunctionId'] = $this->functionId;
        }

        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }

        if (null !== $this->httpTriggerName) {
            $res['HttpTriggerName'] = $this->httpTriggerName;
        }

        if (null !== $this->httpTriggerUrl) {
            $res['HttpTriggerUrl'] = $this->httpTriggerUrl;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['FunctionId'])) {
            $model->functionId = $map['FunctionId'];
        }

        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }

        if (isset($map['HttpTriggerName'])) {
            $model->httpTriggerName = $map['HttpTriggerName'];
        }

        if (isset($map['HttpTriggerUrl'])) {
            $model->httpTriggerUrl = $map['HttpTriggerUrl'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
