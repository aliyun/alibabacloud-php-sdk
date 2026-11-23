<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BMed\V20261121\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QwenB2BMed\V20261121\Models\OpenServiceRequest\communication;

class OpenServiceRequest extends Model
{
    /**
     * @var communication
     */
    public $communication;

    /**
     * @var bool
     */
    public $openBenefits;
    protected $_name = [
        'communication' => 'communication',
        'openBenefits' => 'openBenefits',
    ];

    public function validate()
    {
        if (null !== $this->communication) {
            $this->communication->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->communication) {
            $res['communication'] = null !== $this->communication ? $this->communication->toArray($noStream) : $this->communication;
        }

        if (null !== $this->openBenefits) {
            $res['openBenefits'] = $this->openBenefits;
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
        if (isset($map['communication'])) {
            $model->communication = communication::fromMap($map['communication']);
        }

        if (isset($map['openBenefits'])) {
            $model->openBenefits = $map['openBenefits'];
        }

        return $model;
    }
}
