<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeployDISyncTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The cause of the failure to deploy the real-time synchronization node or data synchronization solution.
     *
     * If the real-time synchronization node or data synchronization solution is deployed, the value null is returned.
     * @example submit and deploy fail.
     *
     * @var string
     */
    public $message;

    /**
     * @description Indicates whether the real-time synchronization node or data synchronization solution is deployed. Valid values:
     *
     *   success: The real-time synchronization node or data synchronization solution is deployed.
     *   fail: The real-time synchronization node or data synchronization solution fails to be deployed.
     *
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'message' => 'Message',
        'status'  => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
