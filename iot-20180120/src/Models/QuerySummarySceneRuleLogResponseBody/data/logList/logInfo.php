<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySummarySceneRuleLogResponseBody\data\logList;

use AlibabaCloud\Tea\Model;

class logInfo extends Model
{
    /**
     * @example 1582373706
     *
     * @var int
     */
    public $logTime;

    /**
     * @example true
     *
     * @var string
     */
    public $result;

    /**
     * @example a6a5b5df1582373508176121******
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'logTime' => 'LogTime',
        'result'  => 'Result',
        'traceId' => 'TraceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logTime) {
            $res['LogTime'] = $this->logTime;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogTime'])) {
            $model->logTime = $map['LogTime'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
