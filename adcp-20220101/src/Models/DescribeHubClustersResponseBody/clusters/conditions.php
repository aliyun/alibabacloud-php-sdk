<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClustersResponseBody\clusters;

use AlibabaCloud\Tea\Model;

class conditions extends Model
{
    /**
     * @description The error message that is returned.
     *
     * @example Successful!
     *
     * @var string
     */
    public $message;

    /**
     * @description The reason for the deletion condition.
     *
     * @example Successful
     *
     * @var string
     */
    public $reason;

    /**
     * @description The status of the cluster that the deletion condition indicates. Valid values:
     *
     *   True: The cluster cannot be deleted.
     *   False: The cluster can be deleted.
     *   Unknow: Whether the cluster can be deleted is unknown.
     *
     * @example True
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of deletion condition.
     *
     * @example DeletionProtection
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'message' => 'Message',
        'reason'  => 'Reason',
        'status'  => 'Status',
        'type'    => 'Type',
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
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
