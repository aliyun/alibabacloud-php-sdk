<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\AuthAndActiveWithHidResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\AuthAndActiveWithHidResponseBody\data\accountModel;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\AuthAndActiveWithHidResponseBody\data\sessionModel;

class data extends Model
{
    /**
     * @var accountModel
     */
    public $accountModel;

    /**
     * @var sessionModel
     */
    public $sessionModel;
    protected $_name = [
        'accountModel' => 'AccountModel',
        'sessionModel' => 'SessionModel',
    ];

    public function validate()
    {
        if (null !== $this->accountModel) {
            $this->accountModel->validate();
        }
        if (null !== $this->sessionModel) {
            $this->sessionModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountModel) {
            $res['AccountModel'] = null !== $this->accountModel ? $this->accountModel->toArray($noStream) : $this->accountModel;
        }

        if (null !== $this->sessionModel) {
            $res['SessionModel'] = null !== $this->sessionModel ? $this->sessionModel->toArray($noStream) : $this->sessionModel;
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
        if (isset($map['AccountModel'])) {
            $model->accountModel = accountModel::fromMap($map['AccountModel']);
        }

        if (isset($map['SessionModel'])) {
            $model->sessionModel = sessionModel::fromMap($map['SessionModel']);
        }

        return $model;
    }
}
