<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateThreadRequest;

use AlibabaCloud\Dara\Model;

class extLoginUser extends Model
{
    /**
     * @var string
     */
    public $extLoginUserDomain;

    /**
     * @var string
     */
    public $extLoginUserId;

    /**
     * @var string
     */
    public $extLoginUserName;
    protected $_name = [
        'extLoginUserDomain' => 'extLoginUserDomain',
        'extLoginUserId' => 'extLoginUserId',
        'extLoginUserName' => 'extLoginUserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extLoginUserDomain) {
            $res['extLoginUserDomain'] = $this->extLoginUserDomain;
        }

        if (null !== $this->extLoginUserId) {
            $res['extLoginUserId'] = $this->extLoginUserId;
        }

        if (null !== $this->extLoginUserName) {
            $res['extLoginUserName'] = $this->extLoginUserName;
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
        if (isset($map['extLoginUserDomain'])) {
            $model->extLoginUserDomain = $map['extLoginUserDomain'];
        }

        if (isset($map['extLoginUserId'])) {
            $model->extLoginUserId = $map['extLoginUserId'];
        }

        if (isset($map['extLoginUserName'])) {
            $model->extLoginUserName = $map['extLoginUserName'];
        }

        return $model;
    }
}
