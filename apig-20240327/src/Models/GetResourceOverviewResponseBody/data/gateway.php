<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetResourceOverviewResponseBody\data;

use AlibabaCloud\Dara\Model;

class gateway extends Model
{
    /**
     * @var int
     */
    public $runningCount;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'runningCount' => 'runningCount',
        'totalCount'   => 'totalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->runningCount) {
            $res['runningCount'] = $this->runningCount;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['runningCount'])) {
            $model->runningCount = $map['runningCount'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
