<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListSummariesResponseBody\regionSummaries;

use AlibabaCloud\Dara\Model;

class stackDetails extends Model
{
    /**
     * @var string
     */
    public $briefStatus;

    /**
     * @var string
     */
    public $count;
    protected $_name = [
        'briefStatus' => 'BriefStatus',
        'count' => 'Count',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->briefStatus) {
            $res['BriefStatus'] = $this->briefStatus;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
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
        if (isset($map['BriefStatus'])) {
            $model->briefStatus = $map['BriefStatus'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
