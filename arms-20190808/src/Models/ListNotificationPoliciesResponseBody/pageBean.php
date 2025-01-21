<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListNotificationPoliciesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListNotificationPoliciesResponseBody\pageBean\notificationPolicies;

class pageBean extends Model
{
    /**
     * @var notificationPolicies[]
     */
    public $notificationPolicies;
    /**
     * @var int
     */
    public $page;
    /**
     * @var int
     */
    public $size;
    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'notificationPolicies' => 'NotificationPolicies',
        'page'                 => 'Page',
        'size'                 => 'Size',
        'total'                => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->notificationPolicies)) {
            Model::validateArray($this->notificationPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->notificationPolicies) {
            if (\is_array($this->notificationPolicies)) {
                $res['NotificationPolicies'] = [];
                $n1                          = 0;
                foreach ($this->notificationPolicies as $item1) {
                    $res['NotificationPolicies'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['NotificationPolicies'])) {
            if (!empty($map['NotificationPolicies'])) {
                $model->notificationPolicies = [];
                $n1                          = 0;
                foreach ($map['NotificationPolicies'] as $item1) {
                    $model->notificationPolicies[$n1++] = notificationPolicies::fromMap($item1);
                }
            }
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
