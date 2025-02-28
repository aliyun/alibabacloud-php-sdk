<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class JobDiagnosis extends Model
{
    /**
     * @var string
     */
    public $diagnoseId;
    /**
     * @var int
     */
    public $diagnoseTime;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $riskLevel;
    /**
     * @var JobDiagnosisSymptoms
     */
    public $symptoms;
    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'diagnoseId'   => 'diagnoseId',
        'diagnoseTime' => 'diagnoseTime',
        'namespace'    => 'namespace',
        'riskLevel'    => 'riskLevel',
        'symptoms'     => 'symptoms',
        'workspace'    => 'workspace',
    ];

    public function validate()
    {
        if (null !== $this->symptoms) {
            $this->symptoms->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diagnoseId) {
            $res['diagnoseId'] = $this->diagnoseId;
        }

        if (null !== $this->diagnoseTime) {
            $res['diagnoseTime'] = $this->diagnoseTime;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->riskLevel) {
            $res['riskLevel'] = $this->riskLevel;
        }

        if (null !== $this->symptoms) {
            $res['symptoms'] = null !== $this->symptoms ? $this->symptoms->toArray($noStream) : $this->symptoms;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['diagnoseId'])) {
            $model->diagnoseId = $map['diagnoseId'];
        }

        if (isset($map['diagnoseTime'])) {
            $model->diagnoseTime = $map['diagnoseTime'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['riskLevel'])) {
            $model->riskLevel = $map['riskLevel'];
        }

        if (isset($map['symptoms'])) {
            $model->symptoms = JobDiagnosisSymptoms::fromMap($map['symptoms']);
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
