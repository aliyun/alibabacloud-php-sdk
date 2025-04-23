<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SetSchedulerInfoRequest;

use AlibabaCloud\Dara\Model;

class slurmInfo extends Model
{
    /**
     * @var int
     */
    public $backfillInterval;

    /**
     * @var int
     */
    public $schedInterval;
    protected $_name = [
        'backfillInterval' => 'BackfillInterval',
        'schedInterval' => 'SchedInterval',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backfillInterval) {
            $res['BackfillInterval'] = $this->backfillInterval;
        }

        if (null !== $this->schedInterval) {
            $res['SchedInterval'] = $this->schedInterval;
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
        if (isset($map['BackfillInterval'])) {
            $model->backfillInterval = $map['BackfillInterval'];
        }

        if (isset($map['SchedInterval'])) {
            $model->schedInterval = $map['SchedInterval'];
        }

        return $model;
    }
}
