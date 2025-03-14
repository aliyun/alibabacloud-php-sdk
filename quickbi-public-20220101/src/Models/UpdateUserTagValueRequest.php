<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserTagValueRequest extends Model
{
    /**
     * @description The ID of the tag to be modified.
     *
     * This parameter is required.
     *
     * @example pop_001
     *
     * @var string
     */
    public $tagId;

    /**
     * @description The tag value to be modified.
     *
     * - To clear this tag, set the tag value to ($NULL$).
     * - For multiple values, use English commas to separate them.
     * - Format validation, maximum length: 3000 characters
     *
     * This parameter is required.
     *
     * @example Product Director
     *
     * @var string
     */
    public $tagValue;

    /**
     * @description The user ID for which the tag value is to be modified. This user ID refers to the Quick BI UserID, not the Alibaba Cloud UID.
     *
     * This parameter is required.
     *
     * @example fe67f61a35a94b7da1a34ba174a7****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'tagId' => 'TagId',
        'tagValue' => 'TagValue',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserTagValueRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
