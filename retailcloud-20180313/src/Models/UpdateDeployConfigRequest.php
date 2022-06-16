<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class UpdateDeployConfigRequest extends Model
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
     * @var int
     */
    public $id;

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
        'id'            => 'Id',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
     * @return UpdateDeployConfigRequest
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
