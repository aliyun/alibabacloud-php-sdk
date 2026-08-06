<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateOutboundCallRestrictionRequest\outboundCallRestriction;

class CreateOutboundCallRestrictionRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var outboundCallRestriction[]
     */
    public $outboundCallRestriction;

    /**
     * @var int
     */
    public $policy;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'outboundCallRestriction' => 'OutboundCallRestriction',
        'policy' => 'Policy',
    ];

    public function validate()
    {
        if (\is_array($this->outboundCallRestriction)) {
            Model::validateArray($this->outboundCallRestriction);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->outboundCallRestriction) {
            if (\is_array($this->outboundCallRestriction)) {
                $res['OutboundCallRestriction'] = [];
                $n1 = 0;
                foreach ($this->outboundCallRestriction as $item1) {
                    $res['OutboundCallRestriction'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['OutboundCallRestriction'])) {
                $model->outboundCallRestriction = [];
                $n1 = 0;
                foreach ($map['OutboundCallRestriction'] as $item1) {
                    $model->outboundCallRestriction[$n1] = outboundCallRestriction::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        return $model;
    }
}
