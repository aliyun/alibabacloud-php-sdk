<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListCustomImageShareAccountsResponseBody;

use AlibabaCloud\Tea\Model;

class imageShareUsers extends Model
{
    /**
     * @description The time when the custom image is shared.
     *
     * @example 2024-07-15 13:59:21.0
     *
     * @var string
     */
    public $sharedTime;

    /**
     * @description The ID of the Alibaba Cloud account whose custom image is shared.
     *
     * @example 125111425233****
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'sharedTime' => 'SharedTime',
        'userId'     => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sharedTime) {
            $res['SharedTime'] = $this->sharedTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageShareUsers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SharedTime'])) {
            $model->sharedTime = $map['SharedTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
