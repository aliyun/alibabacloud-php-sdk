<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDatasResponseBody\data;

use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDatasResponseBody\data\originator\userName;
use AlibabaCloud\Tea\Model;

class originator extends Model
{
    /**
     * @example 012345
     *
     * @var string
     */
    public $userId;

    /**
     * @var userName
     */
    public $userName;
    protected $_name = [
        'userId'   => 'UserId',
        'userName' => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = null !== $this->userName ? $this->userName->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return originator
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = userName::fromMap($map['UserName']);
        }

        return $model;
    }
}
