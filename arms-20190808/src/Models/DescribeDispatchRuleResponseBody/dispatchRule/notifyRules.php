<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponseBody\dispatchRule;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponseBody\dispatchRule\notifyRules\notifyObjects;

class notifyRules extends Model
{
    /**
     * @var string[]
     */
    public $notifyChannels;
    /**
     * @var notifyObjects[]
     */
    public $notifyObjects;
    protected $_name = [
        'notifyChannels' => 'NotifyChannels',
        'notifyObjects'  => 'NotifyObjects',
    ];

    public function validate()
    {
        if (\is_array($this->notifyChannels)) {
            Model::validateArray($this->notifyChannels);
        }
        if (\is_array($this->notifyObjects)) {
            Model::validateArray($this->notifyObjects);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->notifyChannels) {
            if (\is_array($this->notifyChannels)) {
                $res['NotifyChannels'] = [];
                $n1                    = 0;
                foreach ($this->notifyChannels as $item1) {
                    $res['NotifyChannels'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->notifyObjects) {
            if (\is_array($this->notifyObjects)) {
                $res['NotifyObjects'] = [];
                $n1                   = 0;
                foreach ($this->notifyObjects as $item1) {
                    $res['NotifyObjects'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['NotifyChannels'])) {
            if (!empty($map['NotifyChannels'])) {
                $model->notifyChannels = [];
                $n1                    = 0;
                foreach ($map['NotifyChannels'] as $item1) {
                    $model->notifyChannels[$n1++] = $item1;
                }
            }
        }

        if (isset($map['NotifyObjects'])) {
            if (!empty($map['NotifyObjects'])) {
                $model->notifyObjects = [];
                $n1                   = 0;
                foreach ($map['NotifyObjects'] as $item1) {
                    $model->notifyObjects[$n1++] = notifyObjects::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
