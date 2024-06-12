<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetPluginConfigResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\GetPluginConfigResponseBody\data\gatewayConfigList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The category of the plug-in. Valid values:
     *
     * 5: traffic observation
     * @example 0
     *
     * @var int
     */
    public $category;

    /**
     * @description The information about the plug-in configuration used for checking.
     *
     * @example \\# The configuration includes the fields required for checking, such as name, age, and friends. Sample configuration: name: John age: 18 friends: - David - Anne
     *
     * @var string
     */
    public $configCheck;

    /**
     * @var string
     */
    public $configExample;

    /**
     * @example 5
     *
     * @var int
     */
    public $domainConfigStartIndex;

    /**
     * @description The list of gateway plug-in configurations.
     *
     * @var gatewayConfigList[]
     */
    public $gatewayConfigList;

    /**
     * @example 7
     *
     * @var int
     */
    public $gatewayConfigStartIndex;

    /**
     * @description The ID of the plug-in.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the image.
     *
     * @example name
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The mode.
     *
     * @example 0
     *
     * @var int
     */
    public $mode;

    /**
     * @description The name of the plug-in.
     *
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @description The execution stage of the plug-in. Valid values:
     *
     * 3: statistics stage
     * @example 0
     *
     * @var int
     */
    public $phase;

    /**
     * @description The ID of the creator.
     *
     * @example 123
     *
     * @var string
     */
    public $primaryUser;

    /**
     * @description The execution priority of the plug-in. A larger value indicates a higher priority.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The publish status.
     *
     * @example 1
     *
     * @var int
     */
    public $publishState;

    /**
     * @description The description of the README file.
     *
     * @example read me
     *
     * @var string
     */
    public $readme;

    /**
     * @description The description of the README file that is edited in English.
     *
     * @example read me
     *
     * @var string
     */
    public $readmeEn;

    /**
     * @example 0
     *
     * @var int
     */
    public $routeConfigStartIndex;

    /**
     * @description Indicates whether the plug-in is enabled. Valid values:
     *
     * 1: enabled
     * @example 1
     *
     * @var string
     */
    public $status;

    /**
     * @description The summary of the plug-in.
     *
     * @example This is a plug-in.
     *
     * @var string
     */
    public $summary;

    /**
     * @description The type.
     *
     * @example 0
     *
     * @var int
     */
    public $type;

    /**
     * @description The version of the plug-in.
     *
     * @example v1
     *
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $versionJson;

    /**
     * @description The WebAssembly language. Valid values:
     *
     * 4: Zig
     * @example 0
     *
     * @var int
     */
    public $wasmLang;
    protected $_name = [
        'category'                => 'Category',
        'configCheck'             => 'ConfigCheck',
        'configExample'           => 'ConfigExample',
        'domainConfigStartIndex'  => 'DomainConfigStartIndex',
        'gatewayConfigList'       => 'GatewayConfigList',
        'gatewayConfigStartIndex' => 'GatewayConfigStartIndex',
        'id'                      => 'Id',
        'imageName'               => 'ImageName',
        'mode'                    => 'Mode',
        'name'                    => 'Name',
        'phase'                   => 'Phase',
        'primaryUser'             => 'PrimaryUser',
        'priority'                => 'Priority',
        'publishState'            => 'PublishState',
        'readme'                  => 'Readme',
        'readmeEn'                => 'ReadmeEn',
        'routeConfigStartIndex'   => 'RouteConfigStartIndex',
        'status'                  => 'Status',
        'summary'                 => 'Summary',
        'type'                    => 'Type',
        'version'                 => 'Version',
        'versionJson'             => 'VersionJson',
        'wasmLang'                => 'WasmLang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->configCheck) {
            $res['ConfigCheck'] = $this->configCheck;
        }
        if (null !== $this->configExample) {
            $res['ConfigExample'] = $this->configExample;
        }
        if (null !== $this->domainConfigStartIndex) {
            $res['DomainConfigStartIndex'] = $this->domainConfigStartIndex;
        }
        if (null !== $this->gatewayConfigList) {
            $res['GatewayConfigList'] = [];
            if (null !== $this->gatewayConfigList && \is_array($this->gatewayConfigList)) {
                $n = 0;
                foreach ($this->gatewayConfigList as $item) {
                    $res['GatewayConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->gatewayConfigStartIndex) {
            $res['GatewayConfigStartIndex'] = $this->gatewayConfigStartIndex;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->primaryUser) {
            $res['PrimaryUser'] = $this->primaryUser;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->publishState) {
            $res['PublishState'] = $this->publishState;
        }
        if (null !== $this->readme) {
            $res['Readme'] = $this->readme;
        }
        if (null !== $this->readmeEn) {
            $res['ReadmeEn'] = $this->readmeEn;
        }
        if (null !== $this->routeConfigStartIndex) {
            $res['RouteConfigStartIndex'] = $this->routeConfigStartIndex;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->versionJson) {
            $res['VersionJson'] = $this->versionJson;
        }
        if (null !== $this->wasmLang) {
            $res['WasmLang'] = $this->wasmLang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ConfigCheck'])) {
            $model->configCheck = $map['ConfigCheck'];
        }
        if (isset($map['ConfigExample'])) {
            $model->configExample = $map['ConfigExample'];
        }
        if (isset($map['DomainConfigStartIndex'])) {
            $model->domainConfigStartIndex = $map['DomainConfigStartIndex'];
        }
        if (isset($map['GatewayConfigList'])) {
            if (!empty($map['GatewayConfigList'])) {
                $model->gatewayConfigList = [];
                $n                        = 0;
                foreach ($map['GatewayConfigList'] as $item) {
                    $model->gatewayConfigList[$n++] = null !== $item ? gatewayConfigList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GatewayConfigStartIndex'])) {
            $model->gatewayConfigStartIndex = $map['GatewayConfigStartIndex'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['PrimaryUser'])) {
            $model->primaryUser = $map['PrimaryUser'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['PublishState'])) {
            $model->publishState = $map['PublishState'];
        }
        if (isset($map['Readme'])) {
            $model->readme = $map['Readme'];
        }
        if (isset($map['ReadmeEn'])) {
            $model->readmeEn = $map['ReadmeEn'];
        }
        if (isset($map['RouteConfigStartIndex'])) {
            $model->routeConfigStartIndex = $map['RouteConfigStartIndex'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['VersionJson'])) {
            $model->versionJson = $map['VersionJson'];
        }
        if (isset($map['WasmLang'])) {
            $model->wasmLang = $map['WasmLang'];
        }

        return $model;
    }
}
