<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models;

use AlibabaCloud\Tea\Model;

class GetUserProfileCallbackRequest extends Model
{
    /**
     * @var string
     */
    public $userIds;

    /**
     * @var string
     */
    public $docKey;
    protected $_name = [
        'userIds' => 'UserIds',
        'docKey'  => 'DocKey',
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
        if (null !== $this->docKey) {
            $res['DocKey'] = $this->docKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserProfileCallbackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserIds'])) {
            $model->userIds = $map['UserIds'];
        }
        if (isset($map['DocKey'])) {
            $model->docKey = $map['DocKey'];
        }

        return $model;
    }
}
