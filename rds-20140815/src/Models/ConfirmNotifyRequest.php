<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ConfirmNotifyRequest extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account that is used to confirm the notification. You can set this parameter to **0**, which indicates that the notification is confirmed by the system.
     *
     * @example 0
     *
     * @var int
     */
    public $confirmor;

    /**
     * @description The notification IDs.
     *
     * @var int[]
     */
    public $notifyIdList;
    protected $_name = [
        'confirmor'    => 'Confirmor',
        'notifyIdList' => 'NotifyIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->confirmor) {
            $res['Confirmor'] = $this->confirmor;
        }
        if (null !== $this->notifyIdList) {
            $res['NotifyIdList'] = $this->notifyIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfirmNotifyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Confirmor'])) {
            $model->confirmor = $map['Confirmor'];
        }
        if (isset($map['NotifyIdList'])) {
            if (!empty($map['NotifyIdList'])) {
                $model->notifyIdList = $map['NotifyIdList'];
            }
        }

        return $model;
    }
}
