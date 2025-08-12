<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupNotifyPolicyListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupNotifyPolicyListResponseBody\notifyPolicyList\notifyPolicy;

class notifyPolicyList extends Model
{
    /**
     * @var notifyPolicy[]
     */
    public $notifyPolicy;
    protected $_name = [
        'notifyPolicy' => 'NotifyPolicy',
    ];

    public function validate()
    {
        if (\is_array($this->notifyPolicy)) {
            Model::validateArray($this->notifyPolicy);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->notifyPolicy) {
            if (\is_array($this->notifyPolicy)) {
                $res['NotifyPolicy'] = [];
                $n1 = 0;
                foreach ($this->notifyPolicy as $item1) {
                    $res['NotifyPolicy'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['NotifyPolicy'])) {
            if (!empty($map['NotifyPolicy'])) {
                $model->notifyPolicy = [];
                $n1 = 0;
                foreach ($map['NotifyPolicy'] as $item1) {
                    $model->notifyPolicy[$n1] = notifyPolicy::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
