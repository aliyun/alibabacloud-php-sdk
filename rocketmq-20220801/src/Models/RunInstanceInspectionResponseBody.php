<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class RunInstanceInspectionResponseBody extends Model
{
    /**
     * @var string
     */
    public $runId;
    protected $_name = [
        'runId' => 'runId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
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
        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        return $model;
    }
}
