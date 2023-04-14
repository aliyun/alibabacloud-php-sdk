<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\RankingSystemHistory;

use AlibabaCloud\SDK\Airec\V20201126\Models\RankingSystemHistory\meta\predictEngine;
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
     * @example 排序模型A
     *
     * @var string
     */
    public $modelTemplateName;

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

    /**
     * @example aaaa
     *
     * @var string
     */
    public $previousOperateId;
    protected $_name = [
        'autoDeploy'        => 'AutoDeploy',
        'autoDeployAuc'     => 'AutoDeployAuc',
        'conf'              => 'Conf',
        'modelTemplateName' => 'ModelTemplateName',
        'predictEngine'     => 'PredictEngine',
        'predictEngineType' => 'PredictEngineType',
        'previousOperateId' => 'PreviousOperateId',
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
        if (null !== $this->modelTemplateName) {
            $res['ModelTemplateName'] = $this->modelTemplateName;
        }
        if (null !== $this->predictEngine) {
            $res['PredictEngine'] = null !== $this->predictEngine ? $this->predictEngine->toMap() : null;
        }
        if (null !== $this->predictEngineType) {
            $res['PredictEngineType'] = $this->predictEngineType;
        }
        if (null !== $this->previousOperateId) {
            $res['PreviousOperateId'] = $this->previousOperateId;
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
        if (isset($map['ModelTemplateName'])) {
            $model->modelTemplateName = $map['ModelTemplateName'];
        }
        if (isset($map['PredictEngine'])) {
            $model->predictEngine = predictEngine::fromMap($map['PredictEngine']);
        }
        if (isset($map['PredictEngineType'])) {
            $model->predictEngineType = $map['PredictEngineType'];
        }
        if (isset($map['PreviousOperateId'])) {
            $model->previousOperateId = $map['PreviousOperateId'];
        }

        return $model;
    }
}
