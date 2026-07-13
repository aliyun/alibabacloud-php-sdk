<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models\ListProtectionPoliciesResponseBody\data\content\latestApplySummary;

use AlibabaCloud\Dara\Model;

class applyStatusCount extends Model
{
    /**
     * @var string
     */
    public $applyStatus;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'applyStatus' => 'ApplyStatus',
        'count' => 'Count',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyStatus) {
            $res['ApplyStatus'] = $this->applyStatus;
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
        if (isset($map['ApplyStatus'])) {
            $model->applyStatus = $map['ApplyStatus'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
