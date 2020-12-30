<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOrderBaseInfoResponseBody\orderBaseInfo;

use AlibabaCloud\Tea\Model;

class relatedUserList extends Model
{
    /**
     * @var string[]
     */
    public $userIds;
    protected $_name = [
        'userIds' => 'UserIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userIds) {
            $res['UserIds'] = $this->userIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relatedUserList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserIds'])) {
            if (!empty($map['UserIds'])) {
                $model->userIds = $map['UserIds'];
            }
        }

        return $model;
    }
}
