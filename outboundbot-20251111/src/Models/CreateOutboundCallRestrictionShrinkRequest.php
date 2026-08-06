<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models;

use AlibabaCloud\Dara\Model;

class CreateOutboundCallRestrictionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $outboundCallRestrictionShrink;

    /**
     * @var int
     */
    public $policy;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'outboundCallRestrictionShrink' => 'OutboundCallRestriction',
        'policy' => 'Policy',
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

        if (null !== $this->outboundCallRestrictionShrink) {
            $res['OutboundCallRestriction'] = $this->outboundCallRestrictionShrink;
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
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

        if (isset($map['OutboundCallRestriction'])) {
            $model->outboundCallRestrictionShrink = $map['OutboundCallRestriction'];
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        return $model;
    }
}
