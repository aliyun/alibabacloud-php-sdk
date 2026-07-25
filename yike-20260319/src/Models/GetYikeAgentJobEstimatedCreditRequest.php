<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260319\Models;

use AlibabaCloud\Dara\Model;

class GetYikeAgentJobEstimatedCreditRequest extends Model
{
    /**
     * @var string
     */
    public $jobAction;

    /**
     * @var string
     */
    public $jobParams;
    protected $_name = [
        'jobAction' => 'JobAction',
        'jobParams' => 'JobParams',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobAction) {
            $res['JobAction'] = $this->jobAction;
        }

        if (null !== $this->jobParams) {
            $res['JobParams'] = $this->jobParams;
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
        if (isset($map['JobAction'])) {
            $model->jobAction = $map['JobAction'];
        }

        if (isset($map['JobParams'])) {
            $model->jobParams = $map['JobParams'];
        }

        return $model;
    }
}
