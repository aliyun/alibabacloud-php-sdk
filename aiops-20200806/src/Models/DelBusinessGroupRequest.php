<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class DelBusinessGroupRequest extends Model
{
    /**
     * @var string
     */
    public $businessGroupId;
    protected $_name = [
        'businessGroupId' => 'BusinessGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessGroupId) {
            $res['BusinessGroupId'] = $this->businessGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DelBusinessGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessGroupId'])) {
            $model->businessGroupId = $map['BusinessGroupId'];
        }

        return $model;
    }
}
