<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\ListAppConfigHistoryResponseBody;

use AlibabaCloud\Dara\Model;

class publish extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $classify;

    /**
     * @var mixed[]
     */
    public $customConfig;

    /**
     * @var string
     */
    public $deployStatus;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[]
     */
    public $option;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'appId' => 'AppId',
        'classify' => 'Classify',
        'customConfig' => 'CustomConfig',
        'deployStatus' => 'DeployStatus',
        'gmtModified' => 'GmtModified',
        'name' => 'Name',
        'option' => 'Option',
        'resourceType' => 'ResourceType',
        'type' => 'Type',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->customConfig)) {
            Model::validateArray($this->customConfig);
        }
        if (\is_array($this->option)) {
            Model::validateArray($this->option);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }

        if (null !== $this->customConfig) {
            if (\is_array($this->customConfig)) {
                $res['CustomConfig'] = [];
                foreach ($this->customConfig as $key1 => $value1) {
                    $res['CustomConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->deployStatus) {
            $res['DeployStatus'] = $this->deployStatus;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->option) {
            if (\is_array($this->option)) {
                $res['Option'] = [];
                foreach ($this->option as $key1 => $value1) {
                    $res['Option'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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

        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }

        if (isset($map['CustomConfig'])) {
            if (!empty($map['CustomConfig'])) {
                $model->customConfig = [];
                foreach ($map['CustomConfig'] as $key1 => $value1) {
                    $model->customConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['DeployStatus'])) {
            $model->deployStatus = $map['DeployStatus'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Option'])) {
            if (!empty($map['Option'])) {
                $model->option = [];
                foreach ($map['Option'] as $key1 => $value1) {
                    $model->option[$key1] = $value1;
                }
            }
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
