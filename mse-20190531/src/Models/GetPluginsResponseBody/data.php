<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetPluginsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $category;

    /**
     * @var string
     */
    public $configCheck;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $phase;

    /**
     * @var string
     */
    public $primaryUser;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var int
     */
    public $publishState;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $wasmFile;

    /**
     * @var int
     */
    public $wasmLang;
    protected $_name = [
        'category'     => 'Category',
        'configCheck'  => 'ConfigCheck',
        'id'           => 'Id',
        'name'         => 'Name',
        'phase'        => 'Phase',
        'primaryUser'  => 'PrimaryUser',
        'priority'     => 'Priority',
        'publishState' => 'PublishState',
        'status'       => 'Status',
        'summary'      => 'Summary',
        'version'      => 'Version',
        'wasmFile'     => 'WasmFile',
        'wasmLang'     => 'WasmLang',
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
