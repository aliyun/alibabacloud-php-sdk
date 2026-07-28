<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationUsageResponseBody;

use AlibabaCloud\Dara\Model;

class skillUsage extends Model
{
    /**
     * @var int
     */
    public $distinctSkills;

    /**
     * @var int
     */
    public $totalActions;

    /**
     * @var int
     */
    public $totalEdits;

    /**
     * @var int
     */
    public $totalLoads;
    protected $_name = [
        'distinctSkills' => 'DistinctSkills',
        'totalActions' => 'TotalActions',
        'totalEdits' => 'TotalEdits',
        'totalLoads' => 'TotalLoads',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->distinctSkills) {
            $res['DistinctSkills'] = $this->distinctSkills;
        }

        if (null !== $this->totalActions) {
            $res['TotalActions'] = $this->totalActions;
        }

        if (null !== $this->totalEdits) {
            $res['TotalEdits'] = $this->totalEdits;
        }

        if (null !== $this->totalLoads) {
            $res['TotalLoads'] = $this->totalLoads;
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
        if (isset($map['DistinctSkills'])) {
            $model->distinctSkills = $map['DistinctSkills'];
        }

        if (isset($map['TotalActions'])) {
            $model->totalActions = $map['TotalActions'];
        }

        if (isset($map['TotalEdits'])) {
            $model->totalEdits = $map['TotalEdits'];
        }

        if (isset($map['TotalLoads'])) {
            $model->totalLoads = $map['TotalLoads'];
        }

        return $model;
    }
}
