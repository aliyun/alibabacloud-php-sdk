<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\BatchQueryAgAccountResponseBody;

use AlibabaCloud\Dara\Model;

class agAccounts extends Model
{
    /**
     * @var string
     */
    public $loginEmail;

    /**
     * @var string
     */
    public $pk;

    /**
     * @var string
     */
    public $showNickName;
    protected $_name = [
        'loginEmail' => 'LoginEmail',
        'pk' => 'Pk',
        'showNickName' => 'ShowNickName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loginEmail) {
            $res['LoginEmail'] = $this->loginEmail;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }

        if (null !== $this->showNickName) {
            $res['ShowNickName'] = $this->showNickName;
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
        if (isset($map['LoginEmail'])) {
            $model->loginEmail = $map['LoginEmail'];
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        if (isset($map['ShowNickName'])) {
            $model->showNickName = $map['ShowNickName'];
        }

        return $model;
    }
}
