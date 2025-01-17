<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetOpaStrategyDetailNewResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetOpaStrategyDetailNewResponseBody\data\alarmDetail\baseline;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetOpaStrategyDetailNewResponseBody\data\alarmDetail\buildRisk;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetOpaStrategyDetailNewResponseBody\data\alarmDetail\maliciousFile;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetOpaStrategyDetailNewResponseBody\data\alarmDetail\sensitiveFile;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetOpaStrategyDetailNewResponseBody\data\alarmDetail\vul;

class alarmDetail extends Model
{
    /**
     * @var baseline
     */
    public $baseline;
    /**
     * @var buildRisk
     */
    public $buildRisk;
    /**
     * @var maliciousFile
     */
    public $maliciousFile;
    /**
     * @var sensitiveFile
     */
    public $sensitiveFile;
    /**
     * @var vul
     */
    public $vul;
    protected $_name = [
        'baseline'      => 'Baseline',
        'buildRisk'     => 'BuildRisk',
        'maliciousFile' => 'MaliciousFile',
        'sensitiveFile' => 'SensitiveFile',
        'vul'           => 'Vul',
    ];

    public function validate()
    {
        if (null !== $this->baseline) {
            $this->baseline->validate();
        }
        if (null !== $this->buildRisk) {
            $this->buildRisk->validate();
        }
        if (null !== $this->maliciousFile) {
            $this->maliciousFile->validate();
        }
        if (null !== $this->sensitiveFile) {
            $this->sensitiveFile->validate();
        }
        if (null !== $this->vul) {
            $this->vul->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseline) {
            $res['Baseline'] = null !== $this->baseline ? $this->baseline->toArray($noStream) : $this->baseline;
        }

        if (null !== $this->buildRisk) {
            $res['BuildRisk'] = null !== $this->buildRisk ? $this->buildRisk->toArray($noStream) : $this->buildRisk;
        }

        if (null !== $this->maliciousFile) {
            $res['MaliciousFile'] = null !== $this->maliciousFile ? $this->maliciousFile->toArray($noStream) : $this->maliciousFile;
        }

        if (null !== $this->sensitiveFile) {
            $res['SensitiveFile'] = null !== $this->sensitiveFile ? $this->sensitiveFile->toArray($noStream) : $this->sensitiveFile;
        }

        if (null !== $this->vul) {
            $res['Vul'] = null !== $this->vul ? $this->vul->toArray($noStream) : $this->vul;
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
        if (isset($map['Baseline'])) {
            $model->baseline = baseline::fromMap($map['Baseline']);
        }

        if (isset($map['BuildRisk'])) {
            $model->buildRisk = buildRisk::fromMap($map['BuildRisk']);
        }

        if (isset($map['MaliciousFile'])) {
            $model->maliciousFile = maliciousFile::fromMap($map['MaliciousFile']);
        }

        if (isset($map['SensitiveFile'])) {
            $model->sensitiveFile = sensitiveFile::fromMap($map['SensitiveFile']);
        }

        if (isset($map['Vul'])) {
            $model->vul = vul::fromMap($map['Vul']);
        }

        return $model;
    }
}
