<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponseBody\dispatchRule;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponseBody\dispatchRule\notifyRules\notifyObjects;
use AlibabaCloud\Tea\Model;

class notifyRules extends Model
{
    /**
     * @var notifyObjects[]
     */
    public $notifyObjects;

    /**
     * @var string[]
     */
    public $notifyChannels;
    protected $_name = [
        'notifyObjects'  => 'NotifyObjects',
        'notifyChannels' => 'NotifyChannels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notifyObjects) {
            $res['NotifyObjects'] = [];
            if (null !== $this->notifyObjects && \is_array($this->notifyObjects)) {
                $n = 0;
                foreach ($this->notifyObjects as $item) {
                    $res['NotifyObjects'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->notifyChannels) {
            $res['NotifyChannels'] = $this->notifyChannels;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notifyRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotifyObjects'])) {
            if (!empty($map['NotifyObjects'])) {
                $model->notifyObjects = [];
                $n                    = 0;
                foreach ($map['NotifyObjects'] as $item) {
                    $model->notifyObjects[$n++] = null !== $item ? notifyObjects::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NotifyChannels'])) {
            if (!empty($map['NotifyChannels'])) {
                $model->notifyChannels = $map['NotifyChannels'];
            }
        }

        return $model;
    }
}
