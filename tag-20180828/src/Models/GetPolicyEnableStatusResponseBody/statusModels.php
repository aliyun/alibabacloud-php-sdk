<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\GetPolicyEnableStatusResponseBody;

use AlibabaCloud\Tea\Model;

class statusModels extends Model
{
    /**
     * @description The status of the Tag Policy feature. Valid values:
     *
     *   PendingEnable: The feature is being enabled.
     *   Enabled: The feature is enabled.
     *   Closing: The feature is being disabled.
     *   Disabled: The feature is disabled.
     *
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The mode of the Tag Policy feature. Valid values:
     *
     *   USER: single-account mode
     *   RD: multi-account mode
     *
     * For more information about the modes of the Tag Policy feature, see [Modes of the Tag Policy feature](~~417434~~).
     * @example RD
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'status'   => 'Status',
        'userType' => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statusModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
