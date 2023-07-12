<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySummarySceneRuleLogResponse\data\logList;

use AlibabaCloud\Tea\Model;

class logInfo extends Model
{
    /**
     * @var int
     */
    public $logTime;

    /**
     * @var string
     */
    public $result;

    /**
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
        Model::validateRequired('logTime', $this->logTime, true);
        Model::validateRequired('result', $this->result, true);
        Model::validateRequired('traceId', $this->traceId, true);
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
