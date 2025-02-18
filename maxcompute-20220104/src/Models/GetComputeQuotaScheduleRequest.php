<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class GetComputeQuotaScheduleRequest extends Model
{
    /**
     * @var string
     */
    public $displayTimezone;
    protected $_name = [
        'displayTimezone' => 'displayTimezone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayTimezone) {
            $res['displayTimezone'] = $this->displayTimezone;
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
        if (isset($map['displayTimezone'])) {
            $model->displayTimezone = $map['displayTimezone'];
        }

        return $model;
    }
}
