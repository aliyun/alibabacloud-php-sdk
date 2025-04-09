<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models;

use AlibabaCloud\Dara\Model;

class GetResolveCountSummaryRequest extends Model
{
    /**
     * @var string
     */
    public $granularity;

    /**
     * @var int
     */
    public $timeSpan;
    protected $_name = [
        'granularity' => 'Granularity',
        'timeSpan' => 'TimeSpan',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }

        if (null !== $this->timeSpan) {
            $res['TimeSpan'] = $this->timeSpan;
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
        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }

        if (isset($map['TimeSpan'])) {
            $model->timeSpan = $map['TimeSpan'];
        }

        return $model;
    }
}
