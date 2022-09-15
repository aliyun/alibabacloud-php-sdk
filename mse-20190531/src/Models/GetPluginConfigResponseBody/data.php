<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetPluginConfigResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\GetPluginConfigResponseBody\data\gatewayConfigList;
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
     * @var gatewayConfigList[]
     */
    public $gatewayConfigList;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var int
     */
    public $mode;

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
    public $readme;

    /**
     * @var string
     */
    public $readmeEn;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $version;

    /**
     * @var int
     */
    public $wasmLang;
    protected $_name = [
        'category'          => 'Category',
        'configCheck'       => 'ConfigCheck',
        'gatewayConfigList' => 'GatewayConfigList',
        'id'                => 'Id',
        'imageName'         => 'ImageName',
        'mode'              => 'Mode',
        'name'              => 'Name',
        'phase'             => 'Phase',
        'primaryUser'       => 'PrimaryUser',
        'priority'          => 'Priority',
        'publishState'      => 'PublishState',
        'readme'            => 'Readme',
        'readmeEn'          => 'ReadmeEn',
        'status'            => 'Status',
        'summary'           => 'Summary',
        'type'              => 'Type',
        'version'           => 'Version',
        'wasmLang'          => 'WasmLang',
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
        if (null !== $this->gatewayConfigList) {
            $res['GatewayConfigList'] = [];
            if (null !== $this->gatewayConfigList && \is_array($this->gatewayConfigList)) {
                $n = 0;
                foreach ($this->gatewayConfigList as $item) {
                    $res['GatewayConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['GatewayConfigList'])) {
            if (!empty($map['GatewayConfigList'])) {
                $model->gatewayConfigList = [];
                $n                        = 0;
                foreach ($map['GatewayConfigList'] as $item) {
                    $model->gatewayConfigList[$n++] = null !== $item ? gatewayConfigList::fromMap($item) : $item;
                }
            }
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
        if (isset($map['WasmLang'])) {
            $model->wasmLang = $map['WasmLang'];
        }

        return $model;
    }
}
