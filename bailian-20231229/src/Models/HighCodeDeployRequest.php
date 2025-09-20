<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class HighCodeDeployRequest extends Model
{
    /**
     * @var string
     */
    public $agentDesc;

    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $sourceCodeName;

    /**
     * @var string
     */
    public $sourceCodeOssUrl;

    /**
     * @var bool
     */
    public $telemetryEnabled;
    protected $_name = [
        'agentDesc' => 'agentDesc',
        'agentId' => 'agentId',
        'agentName' => 'agentName',
        'sourceCodeName' => 'sourceCodeName',
        'sourceCodeOssUrl' => 'sourceCodeOssUrl',
        'telemetryEnabled' => 'telemetryEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentDesc) {
            $res['agentDesc'] = $this->agentDesc;
        }

        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        if (null !== $this->agentName) {
            $res['agentName'] = $this->agentName;
        }

        if (null !== $this->sourceCodeName) {
            $res['sourceCodeName'] = $this->sourceCodeName;
        }

        if (null !== $this->sourceCodeOssUrl) {
            $res['sourceCodeOssUrl'] = $this->sourceCodeOssUrl;
        }

        if (null !== $this->telemetryEnabled) {
            $res['telemetryEnabled'] = $this->telemetryEnabled;
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
        if (isset($map['agentDesc'])) {
            $model->agentDesc = $map['agentDesc'];
        }

        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }

        if (isset($map['agentName'])) {
            $model->agentName = $map['agentName'];
        }

        if (isset($map['sourceCodeName'])) {
            $model->sourceCodeName = $map['sourceCodeName'];
        }

        if (isset($map['sourceCodeOssUrl'])) {
            $model->sourceCodeOssUrl = $map['sourceCodeOssUrl'];
        }

        if (isset($map['telemetryEnabled'])) {
            $model->telemetryEnabled = $map['telemetryEnabled'];
        }

        return $model;
    }
}
