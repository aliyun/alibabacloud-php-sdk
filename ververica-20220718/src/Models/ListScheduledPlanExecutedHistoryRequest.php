<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class ListScheduledPlanExecutedHistoryRequest extends Model
{
    /**
     * @var string
     */
    public $deploymentId;
    /**
     * @var string
     */
    public $origin;
    protected $_name = [
        'deploymentId' => 'deploymentId',
        'origin'       => 'origin',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deploymentId) {
            $res['deploymentId'] = $this->deploymentId;
        }

        if (null !== $this->origin) {
            $res['origin'] = $this->origin;
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
        if (isset($map['deploymentId'])) {
            $model->deploymentId = $map['deploymentId'];
        }

        if (isset($map['origin'])) {
            $model->origin = $map['origin'];
        }

        return $model;
    }
}
