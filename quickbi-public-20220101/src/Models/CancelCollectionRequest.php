<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class CancelCollectionRequest extends Model
{
    /**
     * @description The ID of the favorite user. The user ID is the UserID of the Quick BI, not the UID of Alibaba Cloud.
     *
     * @example 121344444790****
     *
     * @var string
     */
    public $userId;

    /**
     * @description The ID of the work to cancel the collection.
     *
     * @example 5d6ae4e7-cede-43cd-b4d3-d2fd442a9202
     *
     * @var string
     */
    public $worksId;
    protected $_name = [
        'userId'  => 'UserId',
        'worksId' => 'WorksId',
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
        if (null !== $this->worksId) {
            $res['WorksId'] = $this->worksId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelCollectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WorksId'])) {
            $model->worksId = $map['WorksId'];
        }

        return $model;
    }
}
