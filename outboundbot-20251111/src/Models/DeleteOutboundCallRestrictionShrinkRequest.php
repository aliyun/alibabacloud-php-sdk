<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models;

use AlibabaCloud\Dara\Model;

class DeleteOutboundCallRestrictionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $restrictionIdListShrink;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'restrictionIdListShrink' => 'RestrictionIdList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->restrictionIdListShrink) {
            $res['RestrictionIdList'] = $this->restrictionIdListShrink;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RestrictionIdList'])) {
            $model->restrictionIdListShrink = $map['RestrictionIdList'];
        }

        return $model;
    }
}
