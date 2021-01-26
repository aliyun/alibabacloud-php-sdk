<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models;

use AlibabaCloud\Tea\Model;

class OpenWhiteBoardRequest extends Model
{
    /**
     * @var string
     */
    public $appID;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $docKey;
    protected $_name = [
        'appID'  => 'AppID',
        'userId' => 'UserId',
        'docKey' => 'DocKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appID) {
            $res['AppID'] = $this->appID;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->docKey) {
            $res['DocKey'] = $this->docKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OpenWhiteBoardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppID'])) {
            $model->appID = $map['AppID'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['DocKey'])) {
            $model->docKey = $map['DocKey'];
        }

        return $model;
    }
}
