<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\tableLifecycleConfig;

use AlibabaCloud\Dara\Model;

class tierToLowFrequency extends Model
{
    /**
     * @var int
     */
    public $daysAfterLastAccessGreaterThan;
    /**
     * @var int
     */
    public $daysAfterLastModificationGreaterThan;
    /**
     * @var int
     */
    public $daysAfterLastTierModificationGreaterThan;
    protected $_name = [
        'daysAfterLastAccessGreaterThan'           => 'DaysAfterLastAccessGreaterThan',
        'daysAfterLastModificationGreaterThan'     => 'DaysAfterLastModificationGreaterThan',
        'daysAfterLastTierModificationGreaterThan' => 'DaysAfterLastTierModificationGreaterThan',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->daysAfterLastAccessGreaterThan) {
            $res['DaysAfterLastAccessGreaterThan'] = $this->daysAfterLastAccessGreaterThan;
        }

        if (null !== $this->daysAfterLastModificationGreaterThan) {
            $res['DaysAfterLastModificationGreaterThan'] = $this->daysAfterLastModificationGreaterThan;
        }

        if (null !== $this->daysAfterLastTierModificationGreaterThan) {
            $res['DaysAfterLastTierModificationGreaterThan'] = $this->daysAfterLastTierModificationGreaterThan;
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
        if (isset($map['DaysAfterLastAccessGreaterThan'])) {
            $model->daysAfterLastAccessGreaterThan = $map['DaysAfterLastAccessGreaterThan'];
        }

        if (isset($map['DaysAfterLastModificationGreaterThan'])) {
            $model->daysAfterLastModificationGreaterThan = $map['DaysAfterLastModificationGreaterThan'];
        }

        if (isset($map['DaysAfterLastTierModificationGreaterThan'])) {
            $model->daysAfterLastTierModificationGreaterThan = $map['DaysAfterLastTierModificationGreaterThan'];
        }

        return $model;
    }
}
