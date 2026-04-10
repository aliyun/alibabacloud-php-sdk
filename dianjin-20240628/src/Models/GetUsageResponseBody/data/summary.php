<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetUsageResponseBody\data;

use AlibabaCloud\Dara\Model;

class summary extends Model
{
    /**
     * @var int
     */
    public $totalInputUsage;

    /**
     * @var int
     */
    public $totalOutputUsage;

    /**
     * @var int
     */
    public $totalRequests;

    /**
     * @var int
     */
    public $totalUsage;
    protected $_name = [
        'totalInputUsage' => 'totalInputUsage',
        'totalOutputUsage' => 'totalOutputUsage',
        'totalRequests' => 'totalRequests',
        'totalUsage' => 'totalUsage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->totalInputUsage) {
            $res['totalInputUsage'] = $this->totalInputUsage;
        }

        if (null !== $this->totalOutputUsage) {
            $res['totalOutputUsage'] = $this->totalOutputUsage;
        }

        if (null !== $this->totalRequests) {
            $res['totalRequests'] = $this->totalRequests;
        }

        if (null !== $this->totalUsage) {
            $res['totalUsage'] = $this->totalUsage;
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
        if (isset($map['totalInputUsage'])) {
            $model->totalInputUsage = $map['totalInputUsage'];
        }

        if (isset($map['totalOutputUsage'])) {
            $model->totalOutputUsage = $map['totalOutputUsage'];
        }

        if (isset($map['totalRequests'])) {
            $model->totalRequests = $map['totalRequests'];
        }

        if (isset($map['totalUsage'])) {
            $model->totalUsage = $map['totalUsage'];
        }

        return $model;
    }
}
