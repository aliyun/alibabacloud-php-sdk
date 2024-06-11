<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class AuthorizeAndroidInstanceRequest extends Model
{
    /**
     * @var string[]
     */
    public $androidInstanceIds;

    /**
     * @example test
     *
     * @var string
     */
    public $authorizeUserId;

    /**
     * @example test
     *
     * @var string
     */
    public $unAuthorizeUserId;
    protected $_name = [
        'androidInstanceIds' => 'AndroidInstanceIds',
        'authorizeUserId'    => 'AuthorizeUserId',
        'unAuthorizeUserId'  => 'UnAuthorizeUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceIds) {
            $res['AndroidInstanceIds'] = $this->androidInstanceIds;
        }
        if (null !== $this->authorizeUserId) {
            $res['AuthorizeUserId'] = $this->authorizeUserId;
        }
        if (null !== $this->unAuthorizeUserId) {
            $res['UnAuthorizeUserId'] = $this->unAuthorizeUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuthorizeAndroidInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceIds'])) {
            if (!empty($map['AndroidInstanceIds'])) {
                $model->androidInstanceIds = $map['AndroidInstanceIds'];
            }
        }
        if (isset($map['AuthorizeUserId'])) {
            $model->authorizeUserId = $map['AuthorizeUserId'];
        }
        if (isset($map['UnAuthorizeUserId'])) {
            $model->unAuthorizeUserId = $map['UnAuthorizeUserId'];
        }

        return $model;
    }
}
