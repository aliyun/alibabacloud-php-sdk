<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListJobRunsResponseBody\jobRuns;

use AlibabaCloud\Dara\Model;

class stateChangeReason extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'code' => 'code',
        'message' => 'message',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        return $model;
    }
}
