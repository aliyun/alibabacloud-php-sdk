<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponse\applyOrderDetail;

use AlibabaCloud\Tea\Model;

class approveAccountList extends Model
{
    /**
     * @var string
     */
    public $baseId;
    protected $_name = [
        'baseId' => 'BaseId',
    ];

    public function validate()
    {
        Model::validateRequired('baseId', $this->baseId, true);
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
