<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListAgentStateLogsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $stateCode;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'startTime' => 'StartTime',
        'stateCode' => 'StateCode',
        'duration'  => 'Duration',
        'state'     => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->stateCode) {
            $res['StateCode'] = $this->stateCode;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StateCode'])) {
            $model->stateCode = $map['StateCode'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
