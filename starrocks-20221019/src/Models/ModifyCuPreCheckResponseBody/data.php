<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyCuPreCheckResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $allow;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'allow' => 'Allow',
        'reason' => 'Reason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allow) {
            $res['Allow'] = $this->allow;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
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
        if (isset($map['Allow'])) {
            $model->allow = $map['Allow'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
