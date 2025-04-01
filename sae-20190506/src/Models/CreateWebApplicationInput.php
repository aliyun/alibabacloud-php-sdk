<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class CreateWebApplicationInput extends Model
{
    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var RevisionConfig
     */
    public $revisionConfig;

    /**
     * @var WebNetworkConfig
     */
    public $webNetworkConfig;

    /**
     * @var WebScalingConfig
     */
    public $webScalingConfig;

    /**
     * @var WebTrafficConfig
     */
    public $webTrafficConfig;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'description' => 'Description',
        'revisionConfig' => 'RevisionConfig',
        'webNetworkConfig' => 'WebNetworkConfig',
        'webScalingConfig' => 'WebScalingConfig',
        'webTrafficConfig' => 'WebTrafficConfig',
    ];

    public function validate()
    {
        if (null !== $this->revisionConfig) {
            $this->revisionConfig->validate();
        }
        if (null !== $this->webNetworkConfig) {
            $this->webNetworkConfig->validate();
        }
        if (null !== $this->webScalingConfig) {
            $this->webScalingConfig->validate();
        }
        if (null !== $this->webTrafficConfig) {
            $this->webTrafficConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->revisionConfig) {
            $res['RevisionConfig'] = null !== $this->revisionConfig ? $this->revisionConfig->toArray($noStream) : $this->revisionConfig;
        }

        if (null !== $this->webNetworkConfig) {
            $res['WebNetworkConfig'] = null !== $this->webNetworkConfig ? $this->webNetworkConfig->toArray($noStream) : $this->webNetworkConfig;
        }

        if (null !== $this->webScalingConfig) {
            $res['WebScalingConfig'] = null !== $this->webScalingConfig ? $this->webScalingConfig->toArray($noStream) : $this->webScalingConfig;
        }

        if (null !== $this->webTrafficConfig) {
            $res['WebTrafficConfig'] = null !== $this->webTrafficConfig ? $this->webTrafficConfig->toArray($noStream) : $this->webTrafficConfig;
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
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['RevisionConfig'])) {
            $model->revisionConfig = RevisionConfig::fromMap($map['RevisionConfig']);
        }

        if (isset($map['WebNetworkConfig'])) {
            $model->webNetworkConfig = WebNetworkConfig::fromMap($map['WebNetworkConfig']);
        }

        if (isset($map['WebScalingConfig'])) {
            $model->webScalingConfig = WebScalingConfig::fromMap($map['WebScalingConfig']);
        }

        if (isset($map['WebTrafficConfig'])) {
            $model->webTrafficConfig = WebTrafficConfig::fromMap($map['WebTrafficConfig']);
        }

        return $model;
    }
}
