<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceInspectionResponseBody\lastRun;

use AlibabaCloud\Dara\Model;

class summary extends Model
{
    /**
     * @var int
     */
    public $infoCount;

    /**
     * @var string
     */
    public $result;

    /**
     * @var int
     */
    public $riskCount;
    protected $_name = [
        'infoCount' => 'infoCount',
        'result' => 'result',
        'riskCount' => 'riskCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->infoCount) {
            $res['infoCount'] = $this->infoCount;
        }

        if (null !== $this->result) {
            $res['result'] = $this->result;
        }

        if (null !== $this->riskCount) {
            $res['riskCount'] = $this->riskCount;
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
        if (isset($map['infoCount'])) {
            $model->infoCount = $map['infoCount'];
        }

        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        if (isset($map['riskCount'])) {
            $model->riskCount = $map['riskCount'];
        }

        return $model;
    }
}
