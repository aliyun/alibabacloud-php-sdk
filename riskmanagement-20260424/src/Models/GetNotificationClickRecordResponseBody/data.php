<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetNotificationClickRecordResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $userCancel;

    /**
     * @var string
     */
    public $userConfirm;
    protected $_name = [
        'userCancel' => 'UserCancel',
        'userConfirm' => 'UserConfirm',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userCancel) {
            $res['UserCancel'] = $this->userCancel;
        }

        if (null !== $this->userConfirm) {
            $res['UserConfirm'] = $this->userConfirm;
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
        if (isset($map['UserCancel'])) {
            $model->userCancel = $map['UserCancel'];
        }

        if (isset($map['UserConfirm'])) {
            $model->userConfirm = $map['UserConfirm'];
        }

        return $model;
    }
}
