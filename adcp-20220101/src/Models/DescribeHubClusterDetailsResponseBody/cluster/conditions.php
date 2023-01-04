<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody\cluster;

use AlibabaCloud\Tea\Model;

class conditions extends Model
{
    /**
     * @description 删除条件错误信息
     *
     * @example Successful
     *
     * @var string
     */
    public $message;

    /**
     * @description 删除条件原因
     *
     * @example Successful
     *
     * @var string
     */
    public $reason;

    /**
     * @description 删除条件状态，取值
     * - Unknow 未知
     * @example True
     *
     * @var string
     */
    public $status;

    /**
     * @description 删除条件类型
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
