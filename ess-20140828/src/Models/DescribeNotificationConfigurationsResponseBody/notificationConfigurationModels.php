<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DescribeNotificationConfigurationsResponseBody;

use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeNotificationConfigurationsResponseBody\notificationConfigurationModels\notificationConfigurationModel;
use AlibabaCloud\Tea\Model;

class notificationConfigurationModels extends Model
{
    /**
     * @var notificationConfigurationModel[]
     */
    public $notificationConfigurationModel;
    protected $_name = [
        'notificationConfigurationModel' => 'NotificationConfigurationModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notificationConfigurationModel) {
            $res['NotificationConfigurationModel'] = [];
            if (null !== $this->notificationConfigurationModel && \is_array($this->notificationConfigurationModel)) {
                $n = 0;
                foreach ($this->notificationConfigurationModel as $item) {
                    $res['NotificationConfigurationModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notificationConfigurationModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotificationConfigurationModel'])) {
            if (!empty($map['NotificationConfigurationModel'])) {
                $model->notificationConfigurationModel = [];
                $n                                     = 0;
                foreach ($map['NotificationConfigurationModel'] as $item) {
                    $model->notificationConfigurationModel[$n++] = null !== $item ? notificationConfigurationModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
