<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models\ListProduceAuthorizationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 12195411612139999
     *
     * @var string
     */
    public $authorizedUserId;

    /**
     * @example test@alibaba-inc.com
     *
     * @var string
     */
    public $authorizedUserName;
    protected $_name = [
        'authorizedUserId'   => 'AuthorizedUserId',
        'authorizedUserName' => 'AuthorizedUserName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
