<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class TrialOrderEligibilityVO extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var bool
     */
    public $valid;
    protected $_name = [
        'message' => 'Message',
        'valid' => 'Valid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->valid) {
            $res['Valid'] = $this->valid;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Valid'])) {
            $model->valid = $map['Valid'];
        }

        return $model;
    }
}
