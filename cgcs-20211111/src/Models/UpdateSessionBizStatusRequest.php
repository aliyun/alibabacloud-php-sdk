<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class UpdateSessionBizStatusRequest extends Model
{
    /**
     * @var string
     */
    public $bizStatus;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $platformSessionId;
    protected $_name = [
        'bizStatus'         => 'BizStatus',
        'platformSessionId' => 'PlatformSessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizStatus) {
            $res['BizStatus'] = $this->bizStatus;
        }
        if (null !== $this->platformSessionId) {
            $res['PlatformSessionId'] = $this->platformSessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSessionBizStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizStatus'])) {
            $model->bizStatus = $map['BizStatus'];
        }
        if (isset($map['PlatformSessionId'])) {
            $model->platformSessionId = $map['PlatformSessionId'];
        }

        return $model;
    }
}
