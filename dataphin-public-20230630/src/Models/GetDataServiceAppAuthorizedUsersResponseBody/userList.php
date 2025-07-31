<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceAppAuthorizedUsersResponseBody;

use AlibabaCloud\Tea\Model;

class userList extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 30002101
     *
     * @var string
     */
    public $id;
    protected $_name = [
        'displayName' => 'DisplayName',
        'id' => 'Id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
