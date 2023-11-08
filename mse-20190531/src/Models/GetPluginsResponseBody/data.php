<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetPluginsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The type of the plug-in. Valid values:
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
     * @example \# The configuration includes the fields required for checking, such as name, age, and friends. Sample configuration: name: John age: 18 friends: - David - Anne
     *
     * @var string
     */
    public $configCheck;

    /**
     * @description The ID of the plug-in.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $maxVersion;

    /**
     * @example 0
     *
     * @var int
     */
    public $mode;

    /**
     * @description The name of the plug-in.
     *
     * @example key-auth
     *
     * @var string
     */
    public $name;

    /**
     * @example false
     *
     * @var bool
     */
    public $newVersionPublishingFlag;

    /**
     * @description The execution stage of the plug-in.
     *
     *   0: default stage
     *   1: authorization stage
     *   2: authentication stage
     *   3: statistics stage
     *
     * @example 1
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
     * @description Indicates whether the plug-in is enabled.
     *
     *   0: disabled
     *   1: enabled
     *
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
     * @description The version of the plug-in.
     *
     * @example v1
     *
     * @var string
     */
    public $version;

    /**
     * @description The URL of the Object Storage Service (OSS) bucket that stores the WebAssembly plug-in.
     *
     * @example https://mse-shared-cn-hangzhou.oss-cn-hangzhou.aliyuncs.com/cfg/import/1917515******\/gw-0adf3ad751284cc69fcf9669fba*****\/2022/11/02/4d390496-2c17-4b42-a479-f9068ba****\/16673573***5.wasm
     *
     * @var string
     */
    public $wasmFile;

    /**
     * @description The WebAssembly language. Valid values:
     *
     *   0: C++
     *   1: TinyGo
     *   2: Rust
     *   3: AssemblyScript
     *   4: Zig
     *
     * @example 0
     *
     * @var int
     */
    public $wasmLang;
    protected $_name = [
        'category'                 => 'Category',
        'configCheck'              => 'ConfigCheck',
        'id'                       => 'Id',
        'maxVersion'               => 'MaxVersion',
        'mode'                     => 'Mode',
        'name'                     => 'Name',
        'newVersionPublishingFlag' => 'NewVersionPublishingFlag',
        'phase'                    => 'Phase',
        'primaryUser'              => 'PrimaryUser',
        'priority'                 => 'Priority',
        'publishState'             => 'PublishState',
        'status'                   => 'Status',
        'summary'                  => 'Summary',
        'version'                  => 'Version',
        'wasmFile'                 => 'WasmFile',
        'wasmLang'                 => 'WasmLang',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->maxVersion) {
            $res['MaxVersion'] = $this->maxVersion;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->newVersionPublishingFlag) {
            $res['NewVersionPublishingFlag'] = $this->newVersionPublishingFlag;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->wasmFile) {
            $res['WasmFile'] = $this->wasmFile;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MaxVersion'])) {
            $model->maxVersion = $map['MaxVersion'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NewVersionPublishingFlag'])) {
            $model->newVersionPublishingFlag = $map['NewVersionPublishingFlag'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['WasmFile'])) {
            $model->wasmFile = $map['WasmFile'];
        }
        if (isset($map['WasmLang'])) {
            $model->wasmLang = $map['WasmLang'];
        }

        return $model;
    }
}
