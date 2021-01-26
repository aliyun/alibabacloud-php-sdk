<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models;

use AlibabaCloud\Tea\Model;

class CreateWhiteBoardRequest extends Model
{
    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $appID;
    protected $_name = [
        'userId' => 'UserId',
        'appID'  => 'AppID',
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
        if (null !== $this->appID) {
            $res['AppID'] = $this->appID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWhiteBoardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['AppID'])) {
            $model->appID = $map['AppID'];
        }

        return $model;
    }
}
