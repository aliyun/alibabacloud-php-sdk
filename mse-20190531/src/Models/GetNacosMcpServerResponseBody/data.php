<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosMcpServerResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosMcpServerResponseBody\data\allVersions;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosMcpServerResponseBody\data\backendEndpoints;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosMcpServerResponseBody\data\remoteServerConfig;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosMcpServerResponseBody\data\toolSpec;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosMcpServerResponseBody\data\versionDetail;

class data extends Model
{
    /**
     * @var allVersions[]
     */
    public $allVersions;

    /**
     * @var backendEndpoints[]
     */
    public $backendEndpoints;

    /**
     * @var string[]
     */
    public $capabilities;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $frontProtocol;

    /**
     * @var string
     */
    public $id;

    /**
     * @var mixed[]
     */
    public $localServerConfig;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var remoteServerConfig
     */
    public $remoteServerConfig;

    /**
     * @var toolSpec
     */
    public $toolSpec;

    /**
     * @var versionDetail
     */
    public $versionDetail;

    /**
     * @var string
     */
    public $yamlConfig;
    protected $_name = [
        'allVersions' => 'AllVersions',
        'backendEndpoints' => 'BackendEndpoints',
        'capabilities' => 'Capabilities',
        'description' => 'Description',
        'enabled' => 'Enabled',
        'frontProtocol' => 'FrontProtocol',
        'id' => 'Id',
        'localServerConfig' => 'LocalServerConfig',
        'name' => 'Name',
        'protocol' => 'Protocol',
        'remoteServerConfig' => 'RemoteServerConfig',
        'toolSpec' => 'ToolSpec',
        'versionDetail' => 'VersionDetail',
        'yamlConfig' => 'YamlConfig',
    ];

    public function validate()
    {
        if (\is_array($this->allVersions)) {
            Model::validateArray($this->allVersions);
        }
        if (\is_array($this->backendEndpoints)) {
            Model::validateArray($this->backendEndpoints);
        }
        if (\is_array($this->capabilities)) {
            Model::validateArray($this->capabilities);
        }
        if (\is_array($this->localServerConfig)) {
            Model::validateArray($this->localServerConfig);
        }
        if (null !== $this->remoteServerConfig) {
            $this->remoteServerConfig->validate();
        }
        if (null !== $this->toolSpec) {
            $this->toolSpec->validate();
        }
        if (null !== $this->versionDetail) {
            $this->versionDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allVersions) {
            if (\is_array($this->allVersions)) {
                $res['AllVersions'] = [];
                $n1 = 0;
                foreach ($this->allVersions as $item1) {
                    $res['AllVersions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->backendEndpoints) {
            if (\is_array($this->backendEndpoints)) {
                $res['BackendEndpoints'] = [];
                $n1 = 0;
                foreach ($this->backendEndpoints as $item1) {
                    $res['BackendEndpoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->capabilities) {
            if (\is_array($this->capabilities)) {
                $res['Capabilities'] = [];
                $n1 = 0;
                foreach ($this->capabilities as $item1) {
                    $res['Capabilities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->frontProtocol) {
            $res['FrontProtocol'] = $this->frontProtocol;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->localServerConfig) {
            if (\is_array($this->localServerConfig)) {
                $res['LocalServerConfig'] = [];
                foreach ($this->localServerConfig as $key1 => $value1) {
                    $res['LocalServerConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->remoteServerConfig) {
            $res['RemoteServerConfig'] = null !== $this->remoteServerConfig ? $this->remoteServerConfig->toArray($noStream) : $this->remoteServerConfig;
        }

        if (null !== $this->toolSpec) {
            $res['ToolSpec'] = null !== $this->toolSpec ? $this->toolSpec->toArray($noStream) : $this->toolSpec;
        }

        if (null !== $this->versionDetail) {
            $res['VersionDetail'] = null !== $this->versionDetail ? $this->versionDetail->toArray($noStream) : $this->versionDetail;
        }

        if (null !== $this->yamlConfig) {
            $res['YamlConfig'] = $this->yamlConfig;
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
        if (isset($map['AllVersions'])) {
            if (!empty($map['AllVersions'])) {
                $model->allVersions = [];
                $n1 = 0;
                foreach ($map['AllVersions'] as $item1) {
                    $model->allVersions[$n1] = allVersions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['BackendEndpoints'])) {
            if (!empty($map['BackendEndpoints'])) {
                $model->backendEndpoints = [];
                $n1 = 0;
                foreach ($map['BackendEndpoints'] as $item1) {
                    $model->backendEndpoints[$n1] = backendEndpoints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Capabilities'])) {
            if (!empty($map['Capabilities'])) {
                $model->capabilities = [];
                $n1 = 0;
                foreach ($map['Capabilities'] as $item1) {
                    $model->capabilities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['FrontProtocol'])) {
            $model->frontProtocol = $map['FrontProtocol'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LocalServerConfig'])) {
            if (!empty($map['LocalServerConfig'])) {
                $model->localServerConfig = [];
                foreach ($map['LocalServerConfig'] as $key1 => $value1) {
                    $model->localServerConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['RemoteServerConfig'])) {
            $model->remoteServerConfig = remoteServerConfig::fromMap($map['RemoteServerConfig']);
        }

        if (isset($map['ToolSpec'])) {
            $model->toolSpec = toolSpec::fromMap($map['ToolSpec']);
        }

        if (isset($map['VersionDetail'])) {
            $model->versionDetail = versionDetail::fromMap($map['VersionDetail']);
        }

        if (isset($map['YamlConfig'])) {
            $model->yamlConfig = $map['YamlConfig'];
        }

        return $model;
    }
}
