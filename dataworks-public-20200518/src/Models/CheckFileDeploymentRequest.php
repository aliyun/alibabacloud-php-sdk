<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CheckFileDeploymentRequest extends Model
{
    /**
     * @description This parameter is deprecated.
     *
     * @example https://result.aliyun.com/?checkerInstanceId=
     *
     * @var string
     */
    public $checkDetailUrl;

    /**
     * @description The ID of the instance to which the file checker belongs. You can obtain the ID from the CheckerInstanceId parameter in the check event logs returned by DataWorks.
     *
     * @example 66_123455623_2
     *
     * @var string
     */
    public $checkerInstanceId;

    /**
     * @description The check status of the file that you want to deploy. Valid values:
     *
     *   OK: The file passes the check.
     *   WARN: The file passes the check, but an alert is reported.
     *   FAIL: The file fails the check.
     *
     * @example OK
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'checkDetailUrl'    => 'CheckDetailUrl',
        'checkerInstanceId' => 'CheckerInstanceId',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkDetailUrl) {
            $res['CheckDetailUrl'] = $this->checkDetailUrl;
        }
        if (null !== $this->checkerInstanceId) {
            $res['CheckerInstanceId'] = $this->checkerInstanceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckFileDeploymentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckDetailUrl'])) {
            $model->checkDetailUrl = $map['CheckDetailUrl'];
        }
        if (isset($map['CheckerInstanceId'])) {
            $model->checkerInstanceId = $map['CheckerInstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
