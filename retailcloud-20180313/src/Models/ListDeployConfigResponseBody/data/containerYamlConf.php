<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListDeployConfigResponseBody\data;

use AlibabaCloud\Tea\Model;

class containerYamlConf extends Model
{
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
     * @var string[]
     */
    public $secretList;

    /**
     * @var string
     */
    public $statefulSet;
    protected $_name = [
        'configMap'     => 'ConfigMap',
        'configMapList' => 'ConfigMapList',
        'cronJob'       => 'CronJob',
        'deployment'    => 'Deployment',
        'secretList'    => 'SecretList',
        'statefulSet'   => 'StatefulSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return containerYamlConf
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
