<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\ListTargetsForPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class targets extends Model
{
    /**
     * @description The ID of the object.
     *
     * @example 195320939469****
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The type of the object. Valid values:
     *
     *   USER: the current logon account. This value is available if you use the Tag Policy feature in single-account mode.
     *   ROOT: the Root folder in the resource directory. This value is available if you use the Tag Policy feature in multi-account mode.
     *   FOLDER: a folder other than the Root folder in the resource directory. This value is available if you use the Tag Policy feature in multi-account mode.
     *   ACCOUNT: a member in the resource directory. This value is available if you use the Tag Policy feature in multi-account mode.
     *
     * @example ACCOUNT
     *
     * @var int
     */
    public $targetType;
    protected $_name = [
        'targetId'   => 'TargetId',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
