<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SetSchedulerInfoRequest;

use AlibabaCloud\Tea\Model;

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
        'schedInterval'    => 'SchedInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return slurmInfo
     */
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
