<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class IncidentPlanCorporationStruct extends Model
{
    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $robotId;
    protected $_name = [
        'channel' => 'channel',
        'robotId' => 'robotId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }

        if (null !== $this->robotId) {
            $res['robotId'] = $this->robotId;
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
        if (isset($map['channel'])) {
            $model->channel = $map['channel'];
        }

        if (isset($map['robotId'])) {
            $model->robotId = $map['robotId'];
        }

        return $model;
    }
}
