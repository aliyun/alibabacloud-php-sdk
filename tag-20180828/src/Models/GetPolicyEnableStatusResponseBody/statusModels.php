<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\GetPolicyEnableStatusResponseBody;

use AlibabaCloud\Tea\Model;

class statusModels extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
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
