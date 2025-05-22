<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models\ListProduceAuthorizationResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $authorizedUserId;

    /**
     * @var string
     */
    public $authorizedUserName;
    protected $_name = [
        'authorizedUserId' => 'AuthorizedUserId',
        'authorizedUserName' => 'AuthorizedUserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizedUserId) {
            $res['AuthorizedUserId'] = $this->authorizedUserId;
        }

        if (null !== $this->authorizedUserName) {
            $res['AuthorizedUserName'] = $this->authorizedUserName;
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
        if (isset($map['AuthorizedUserId'])) {
            $model->authorizedUserId = $map['AuthorizedUserId'];
        }

        if (isset($map['AuthorizedUserName'])) {
            $model->authorizedUserName = $map['AuthorizedUserName'];
        }

        return $model;
    }
}
