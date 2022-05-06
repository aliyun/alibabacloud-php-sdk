<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ConfirmNotifyShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $confirmor;

    /**
     * @var string
     */
    public $notifyIdListShrink;
    protected $_name = [
        'confirmor'          => 'Confirmor',
        'notifyIdListShrink' => 'NotifyIdList',
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
        if (null !== $this->notifyIdListShrink) {
            $res['NotifyIdList'] = $this->notifyIdListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfirmNotifyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Confirmor'])) {
            $model->confirmor = $map['Confirmor'];
        }
        if (isset($map['NotifyIdList'])) {
            $model->notifyIdListShrink = $map['NotifyIdList'];
        }

        return $model;
    }
}
