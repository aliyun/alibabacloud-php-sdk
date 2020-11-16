<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateBoardRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appUid;
    protected $_name = [
        'appId'  => 'AppId',
        'appUid' => 'AppUid',
    ];

    public function validate()
    {
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('appUid', $this->appUid, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appUid) {
            $res['AppUid'] = $this->appUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBoardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppUid'])) {
            $model->appUid = $map['AppUid'];
        }

        return $model;
    }
}
