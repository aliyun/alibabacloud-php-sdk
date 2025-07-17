<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListAuthorizedUsersForDatabaseResponseBody\users;
use AlibabaCloud\Tea\Model;

class ListAuthorizedUsersForDatabaseResponseBody extends Model
{
    /**
     * @example FE8EE2F1-4880-46BC-A704-5CF63EAF9A04
     *
     * @var string
     */
    public $requestId;

    /**
     * @var users[]
     */
    public $users;
    protected $_name = [
        'requestId' => 'RequestId',
        'users' => 'Users',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->users) {
            $res['Users'] = [];
            if (null !== $this->users && \is_array($this->users)) {
                $n = 0;
                foreach ($this->users as $item) {
                    $res['Users'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAuthorizedUsersForDatabaseResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n = 0;
                foreach ($map['Users'] as $item) {
                    $model->users[$n++] = null !== $item ? users::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
