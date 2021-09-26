<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetDasUsageResponseBody;

use AlibabaCloud\Tea\Model;

class agent extends Model
{
    /**
     * @var bool
     */
    public $hasFlow;

    /**
     * @var string
     */
    public $instState;

    /**
     * @var int
     */
    public $activeCount;
    protected $_name = [
        'hasFlow'     => 'HasFlow',
        'instState'   => 'InstState',
        'activeCount' => 'ActiveCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hasFlow) {
            $res['HasFlow'] = $this->hasFlow;
        }
        if (null !== $this->instState) {
            $res['InstState'] = $this->instState;
        }
        if (null !== $this->activeCount) {
            $res['ActiveCount'] = $this->activeCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return agent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HasFlow'])) {
            $model->hasFlow = $map['HasFlow'];
        }
        if (isset($map['InstState'])) {
            $model->instState = $map['InstState'];
        }
        if (isset($map['ActiveCount'])) {
            $model->activeCount = $map['ActiveCount'];
        }

        return $model;
    }
}
