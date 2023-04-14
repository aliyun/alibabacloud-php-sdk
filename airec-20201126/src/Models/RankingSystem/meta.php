<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\RankingSystem;

use AlibabaCloud\SDK\Airec\V20201126\Models\RankingSystem\meta\predictEngine;
use AlibabaCloud\Tea\Model;

class meta extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoDeploy;

    /**
     * @example 0.3
     *
     * @var string
     */
    public $autoDeployAuc;

    /**
     * @var string
     */
    public $conf;

    /**
     * @var string
     */
    public $failMsg;

    /**
     * @example 模型A_T1638964800000
     *
     * @var string
     */
    public $modelVersionName;

    /**
     * @var predictEngine
     */
    public $predictEngine;

    /**
     * @example EAS
     *
     * @var string
     */
    public $predictEngineType;
    protected $_name = [
        'autoDeploy'        => 'AutoDeploy',
        'autoDeployAuc'     => 'AutoDeployAuc',
        'conf'              => 'Conf',
        'failMsg'           => 'FailMsg',
        'modelVersionName'  => 'ModelVersionName',
        'predictEngine'     => 'PredictEngine',
        'predictEngineType' => 'PredictEngineType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoDeploy) {
            $res['AutoDeploy'] = $this->autoDeploy;
        }
        if (null !== $this->autoDeployAuc) {
            $res['AutoDeployAuc'] = $this->autoDeployAuc;
        }
        if (null !== $this->conf) {
            $res['Conf'] = $this->conf;
        }
        if (null !== $this->failMsg) {
            $res['FailMsg'] = $this->failMsg;
        }
        if (null !== $this->modelVersionName) {
            $res['ModelVersionName'] = $this->modelVersionName;
        }
        if (null !== $this->predictEngine) {
            $res['PredictEngine'] = null !== $this->predictEngine ? $this->predictEngine->toMap() : null;
        }
        if (null !== $this->predictEngineType) {
            $res['PredictEngineType'] = $this->predictEngineType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return meta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoDeploy'])) {
            $model->autoDeploy = $map['AutoDeploy'];
        }
        if (isset($map['AutoDeployAuc'])) {
            $model->autoDeployAuc = $map['AutoDeployAuc'];
        }
        if (isset($map['Conf'])) {
            $model->conf = $map['Conf'];
        }
        if (isset($map['FailMsg'])) {
            $model->failMsg = $map['FailMsg'];
        }
        if (isset($map['ModelVersionName'])) {
            $model->modelVersionName = $map['ModelVersionName'];
        }
        if (isset($map['PredictEngine'])) {
            $model->predictEngine = predictEngine::fromMap($map['PredictEngine']);
        }
        if (isset($map['PredictEngineType'])) {
            $model->predictEngineType = $map['PredictEngineType'];
        }

        return $model;
    }
}
