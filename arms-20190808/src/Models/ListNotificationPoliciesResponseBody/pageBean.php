<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListNotificationPoliciesResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListNotificationPoliciesResponseBody\pageBean\notificationPolicies;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notificationPolicies) {
            $res['NotificationPolicies'] = [];
            if (null !== $this->notificationPolicies && \is_array($this->notificationPolicies)) {
                $n = 0;
                foreach ($this->notificationPolicies as $item) {
                    $res['NotificationPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return pageBean
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotificationPolicies'])) {
            if (!empty($map['NotificationPolicies'])) {
                $model->notificationPolicies = [];
                $n                           = 0;
                foreach ($map['NotificationPolicies'] as $item) {
                    $model->notificationPolicies[$n++] = null !== $item ? notificationPolicies::fromMap($item) : $item;
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
