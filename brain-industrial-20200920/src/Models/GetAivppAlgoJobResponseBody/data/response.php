<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetAivppAlgoJobResponseBody\data;

use AlibabaCloud\Dara\Model;

class response extends Model
{
    /**
     * @var mixed
     */
    public $debugInfo;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var mixed
     */
    public $result;
    protected $_name = [
        'debugInfo' => 'DebugInfo',
        'jobType' => 'JobType',
        'result' => 'Result',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->debugInfo) {
            $res['DebugInfo'] = $this->debugInfo;
        }

        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
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
        if (isset($map['DebugInfo'])) {
            $model->debugInfo = $map['DebugInfo'];
        }

        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
