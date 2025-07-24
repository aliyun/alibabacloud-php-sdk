<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ApplicationConfigurationFile extends Model
{
    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $configFileFormat;

    /**
     * @var string
     */
    public $configFileGroup;

    /**
     * @var string
     */
    public $configFileLink;

    /**
     * @var string
     */
    public $configFileMode;

    /**
     * @var string
     */
    public $configFileName;

    /**
     * @var string
     */
    public $configFileOwner;

    /**
     * @var string
     */
    public $configFilePath;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'clusterId' => 'ClusterId',
        'configFileFormat' => 'ConfigFileFormat',
        'configFileGroup' => 'ConfigFileGroup',
        'configFileLink' => 'ConfigFileLink',
        'configFileMode' => 'ConfigFileMode',
        'configFileName' => 'ConfigFileName',
        'configFileOwner' => 'ConfigFileOwner',
        'configFilePath' => 'ConfigFilePath',
        'description' => 'Description',
        'nodeGroupId' => 'NodeGroupId',
        'nodeId' => 'NodeId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->configFileFormat) {
            $res['ConfigFileFormat'] = $this->configFileFormat;
        }
        if (null !== $this->configFileGroup) {
            $res['ConfigFileGroup'] = $this->configFileGroup;
        }
        if (null !== $this->configFileLink) {
            $res['ConfigFileLink'] = $this->configFileLink;
        }
        if (null !== $this->configFileMode) {
            $res['ConfigFileMode'] = $this->configFileMode;
        }
        if (null !== $this->configFileName) {
            $res['ConfigFileName'] = $this->configFileName;
        }
        if (null !== $this->configFileOwner) {
            $res['ConfigFileOwner'] = $this->configFileOwner;
        }
        if (null !== $this->configFilePath) {
            $res['ConfigFilePath'] = $this->configFilePath;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplicationConfigurationFile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ConfigFileFormat'])) {
            $model->configFileFormat = $map['ConfigFileFormat'];
        }
        if (isset($map['ConfigFileGroup'])) {
            $model->configFileGroup = $map['ConfigFileGroup'];
        }
        if (isset($map['ConfigFileLink'])) {
            $model->configFileLink = $map['ConfigFileLink'];
        }
        if (isset($map['ConfigFileMode'])) {
            $model->configFileMode = $map['ConfigFileMode'];
        }
        if (isset($map['ConfigFileName'])) {
            $model->configFileName = $map['ConfigFileName'];
        }
        if (isset($map['ConfigFileOwner'])) {
            $model->configFileOwner = $map['ConfigFileOwner'];
        }
        if (isset($map['ConfigFilePath'])) {
            $model->configFilePath = $map['ConfigFilePath'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
