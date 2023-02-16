<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class ChangeAccountEmailRequest extends Model
{
    /**
     * @example 181761095690****
     *
     * @var string
     */
    public $accountId;

    /**
     * @example someone@example.com
     *
     * @var string
     */
    public $email;
    protected $_name = [
        'accountId' => 'AccountId',
        'email'     => 'Email',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeAccountEmailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        return $model;
    }
}
