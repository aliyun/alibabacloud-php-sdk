<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20260120\Models\GetDataMaskingAccountCountResponseBody;

use AlibabaCloud\Dara\Model;

class accountCount extends Model
{
    /**
     * @var int
     */
    public $fullAccessCount;

    /**
     * @var int
     */
    public $noneAccessCount;

    /**
     * @var int
     */
    public $restrictedAccessCount;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'fullAccessCount' => 'FullAccessCount',
        'noneAccessCount' => 'NoneAccessCount',
        'restrictedAccessCount' => 'RestrictedAccessCount',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fullAccessCount) {
            $res['FullAccessCount'] = $this->fullAccessCount;
        }

        if (null !== $this->noneAccessCount) {
            $res['NoneAccessCount'] = $this->noneAccessCount;
        }

        if (null !== $this->restrictedAccessCount) {
            $res['RestrictedAccessCount'] = $this->restrictedAccessCount;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['FullAccessCount'])) {
            $model->fullAccessCount = $map['FullAccessCount'];
        }

        if (isset($map['NoneAccessCount'])) {
            $model->noneAccessCount = $map['NoneAccessCount'];
        }

        if (isset($map['RestrictedAccessCount'])) {
            $model->restrictedAccessCount = $map['RestrictedAccessCount'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
