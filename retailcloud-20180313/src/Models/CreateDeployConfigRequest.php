<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class CreateDeployConfigRequest extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $codePath;

    /**
     * @var string
     */
    public $configMap;

    /**
     * @var string[]
     */
    public $configMapList;

    /**
     * @var string
     */
    public $cronJob;

    /**
     * @var string
     */
    public $deployment;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $secretList;

    /**
     * @var string
     */
    public $statefulSet;
    protected $_name = [
        'appId'         => 'AppId',
        'codePath'      => 'CodePath',
        'configMap'     => 'ConfigMap',
        'configMapList' => 'ConfigMapList',
        'cronJob'       => 'CronJob',
        'deployment'    => 'Deployment',
        'envType'       => 'EnvType',
        'name'          => 'Name',
        'secretList'    => 'SecretList',
        'statefulSet'   => 'StatefulSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->codePath) {
            $res['CodePath'] = $this->codePath;
        }
        if (null !== $this->configMap) {
            $res['ConfigMap'] = $this->configMap;
        }
        if (null !== $this->configMapList) {
            $res['ConfigMapList'] = $this->configMapList;
        }
        if (null !== $this->cronJob) {
            $res['CronJob'] = $this->cronJob;
        }
        if (null !== $this->deployment) {
            $res['Deployment'] = $this->deployment;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->secretList) {
            $res['SecretList'] = $this->secretList;
        }
        if (null !== $this->statefulSet) {
            $res['StatefulSet'] = $this->statefulSet;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDeployConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CodePath'])) {
            $model->codePath = $map['CodePath'];
        }
        if (isset($map['ConfigMap'])) {
            $model->configMap = $map['ConfigMap'];
        }
        if (isset($map['ConfigMapList'])) {
            if (!empty($map['ConfigMapList'])) {
                $model->configMapList = $map['ConfigMapList'];
            }
        }
        if (isset($map['CronJob'])) {
            $model->cronJob = $map['CronJob'];
        }
        if (isset($map['Deployment'])) {
            $model->deployment = $map['Deployment'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SecretList'])) {
            if (!empty($map['SecretList'])) {
                $model->secretList = $map['SecretList'];
            }
        }
        if (isset($map['StatefulSet'])) {
            $model->statefulSet = $map['StatefulSet'];
        }

        return $model;
    }
}
