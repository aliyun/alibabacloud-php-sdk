<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ScalingStatus extends Model
{
    /**
     * @var string
     */
    public $currentError;

    /**
     * @var int
     */
    public $resourceCount;
    protected $_name = [
        'currentError' => 'currentError',
        'resourceCount' => 'resourceCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentError) {
            $res['currentError'] = $this->currentError;
        }

        if (null !== $this->resourceCount) {
            $res['resourceCount'] = $this->resourceCount;
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
        if (isset($map['currentError'])) {
            $model->currentError = $map['currentError'];
        }

        if (isset($map['resourceCount'])) {
            $model->resourceCount = $map['resourceCount'];
        }

        return $model;
    }
}
