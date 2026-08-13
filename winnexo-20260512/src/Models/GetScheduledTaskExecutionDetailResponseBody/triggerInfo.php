<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetScheduledTaskExecutionDetailResponseBody;

use AlibabaCloud\Dara\Model;

class triggerInfo extends Model
{
    /**
     * @var string
     */
    public $triggeredBy;
    protected $_name = [
        'triggeredBy' => 'triggeredBy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->triggeredBy) {
            $res['triggeredBy'] = $this->triggeredBy;
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
        if (isset($map['triggeredBy'])) {
            $model->triggeredBy = $map['triggeredBy'];
        }

        return $model;
    }
}
