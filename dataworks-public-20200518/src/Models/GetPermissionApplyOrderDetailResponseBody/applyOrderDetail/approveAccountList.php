<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody\applyOrderDetail;

use AlibabaCloud\Tea\Model;

class approveAccountList extends Model
{
    /**
     * @description The unique ID of the Alibaba Cloud account that is used to approve the permission request order.
     *
     * @example 182293110403****
     *
     * @var string
     */
    public $baseId;
    protected $_name = [
        'baseId' => 'BaseId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseId) {
            $res['BaseId'] = $this->baseId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return approveAccountList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseId'])) {
            $model->baseId = $map['BaseId'];
        }

        return $model;
    }
}
