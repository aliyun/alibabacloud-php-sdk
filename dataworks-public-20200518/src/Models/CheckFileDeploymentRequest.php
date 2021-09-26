<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CheckFileDeploymentRequest extends Model
{
    /**
     * @var string
     */
    public $checkerInstanceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $checkDetailUrl;
    protected $_name = [
        'checkerInstanceId' => 'CheckerInstanceId',
        'status'            => 'Status',
        'checkDetailUrl'    => 'CheckDetailUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkerInstanceId) {
            $res['CheckerInstanceId'] = $this->checkerInstanceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->checkDetailUrl) {
            $res['CheckDetailUrl'] = $this->checkDetailUrl;
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
        if (isset($map['CheckerInstanceId'])) {
            $model->checkerInstanceId = $map['CheckerInstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CheckDetailUrl'])) {
            $model->checkDetailUrl = $map['CheckDetailUrl'];
        }

        return $model;
    }
}
