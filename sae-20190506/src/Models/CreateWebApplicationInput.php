<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class CreateWebApplicationInput extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example sae-app
     *
     * @var string
     */
    public $applicationName;

    /**
     * @example my sae app
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
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
        'applicationName'  => 'ApplicationName',
        'description'      => 'Description',
        'revisionConfig'   => 'RevisionConfig',
        'webNetworkConfig' => 'WebNetworkConfig',
        'webScalingConfig' => 'WebScalingConfig',
        'webTrafficConfig' => 'WebTrafficConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->revisionConfig) {
            $res['RevisionConfig'] = null !== $this->revisionConfig ? $this->revisionConfig->toMap() : null;
        }
        if (null !== $this->webNetworkConfig) {
            $res['WebNetworkConfig'] = null !== $this->webNetworkConfig ? $this->webNetworkConfig->toMap() : null;
        }
        if (null !== $this->webScalingConfig) {
            $res['WebScalingConfig'] = null !== $this->webScalingConfig ? $this->webScalingConfig->toMap() : null;
        }
        if (null !== $this->webTrafficConfig) {
            $res['WebTrafficConfig'] = null !== $this->webTrafficConfig ? $this->webTrafficConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWebApplicationInput
     */
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
