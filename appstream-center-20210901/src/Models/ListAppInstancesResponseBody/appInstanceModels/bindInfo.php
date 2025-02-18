<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstancesResponseBody\appInstanceModels;

use AlibabaCloud\Dara\Model;

class bindInfo extends Model
{
    /**
     * @var string
     */
    public $endUserId;
    /**
     * @var int
     */
    public $usageDuration;
    protected $_name = [
        'endUserId'     => 'EndUserId',
        'usageDuration' => 'UsageDuration',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->usageDuration) {
            $res['UsageDuration'] = $this->usageDuration;
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
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['UsageDuration'])) {
            $model->usageDuration = $map['UsageDuration'];
        }

        return $model;
    }
}
