<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class VodPackagingConfiguration extends Model
{
    /**
     * @var string
     */
    public $configurationName;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var VodPackagingConfig
     */
    public $packageConfig;
    /**
     * @var string
     */
    public $protocol;
    protected $_name = [
        'configurationName' => 'ConfigurationName',
        'createTime'        => 'CreateTime',
        'description'       => 'Description',
        'groupName'         => 'GroupName',
        'packageConfig'     => 'PackageConfig',
        'protocol'          => 'Protocol',
    ];

    public function validate()
    {
        if (null !== $this->packageConfig) {
            $this->packageConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configurationName) {
            $res['ConfigurationName'] = $this->configurationName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->packageConfig) {
            $res['PackageConfig'] = null !== $this->packageConfig ? $this->packageConfig->toArray($noStream) : $this->packageConfig;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
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
        if (isset($map['ConfigurationName'])) {
            $model->configurationName = $map['ConfigurationName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['PackageConfig'])) {
            $model->packageConfig = VodPackagingConfig::fromMap($map['PackageConfig']);
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
