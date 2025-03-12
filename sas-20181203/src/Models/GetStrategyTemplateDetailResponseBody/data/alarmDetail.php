<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetStrategyTemplateDetailResponseBody\data;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetStrategyTemplateDetailResponseBody\data\alarmDetail\baseline;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetStrategyTemplateDetailResponseBody\data\alarmDetail\maliciousFile;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetStrategyTemplateDetailResponseBody\data\alarmDetail\vul;
use AlibabaCloud\Tea\Model;

class alarmDetail extends Model
{
    /**
     * @description The configuration of the baseline.
     *
     * @var baseline
     */
    public $baseline;

    /**
     * @description The configuration of the alert rule for the malicious sample.
     *
     * @var maliciousFile
     */
    public $maliciousFile;

    /**
     * @description The configuration of the vulnerability detection rule.
     *
     * @var vul
     */
    public $vul;
    protected $_name = [
        'baseline'      => 'Baseline',
        'maliciousFile' => 'MaliciousFile',
        'vul'           => 'Vul',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseline) {
            $res['Baseline'] = null !== $this->baseline ? $this->baseline->toMap() : null;
        }
        if (null !== $this->maliciousFile) {
            $res['MaliciousFile'] = null !== $this->maliciousFile ? $this->maliciousFile->toMap() : null;
        }
        if (null !== $this->vul) {
            $res['Vul'] = null !== $this->vul ? $this->vul->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarmDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Baseline'])) {
            $model->baseline = baseline::fromMap($map['Baseline']);
        }
        if (isset($map['MaliciousFile'])) {
            $model->maliciousFile = maliciousFile::fromMap($map['MaliciousFile']);
        }
        if (isset($map['Vul'])) {
            $model->vul = vul::fromMap($map['Vul']);
        }

        return $model;
    }
}
