<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20150801\Models;

use AlibabaCloud\Tea\Model;

class ReportLogSampleRequest extends Model
{
    /**
     * @var string
     */
    public $logSample;

    /**
     * @var int
     */
    public $scenarioId;

    /**
     * @var string
     */
    public $wskey;
    protected $_name = [
        'logSample'  => 'LogSample',
        'scenarioId' => 'ScenarioId',
        'wskey'      => 'Wskey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logSample) {
            $res['LogSample'] = $this->logSample;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->wskey) {
            $res['Wskey'] = $this->wskey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReportLogSampleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogSample'])) {
            $model->logSample = $map['LogSample'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['Wskey'])) {
            $model->wskey = $map['Wskey'];
        }

        return $model;
    }
}
