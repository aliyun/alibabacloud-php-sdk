<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DescribeNotificationConfigurationsResponseBody\notificationConfigurationModels\notificationConfigurationModel;

use AlibabaCloud\Tea\Model;

class notificationTypes extends Model
{
    /**
     * @var string[]
     */
    public $notificationType;
    protected $_name = [
        'notificationType' => 'NotificationType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notificationType) {
            $res['NotificationType'] = $this->notificationType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notificationTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotificationType'])) {
            if (!empty($map['NotificationType'])) {
                $model->notificationType = $map['NotificationType'];
            }
        }

        return $model;
    }
}
