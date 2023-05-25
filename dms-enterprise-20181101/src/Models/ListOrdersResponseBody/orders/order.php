<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListOrdersResponseBody\orders;

use AlibabaCloud\Tea\Model;

class order extends Model
{
    /**
     * @description The remarks of the ticket.
     *
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @description The user who submitted the ticket.
     *
     * @example test
     *
     * @var string
     */
    public $committer;

    /**
     * @description The ID of the user who submitted the ticket.
     *
     * @example 51****
     *
     * @var int
     */
    public $committerId;

    /**
     * @description The time when the ticket was created.
     *
     * @example 2022-04-08 11:15:46
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the ticket was last modified.
     *
     * @example 2022-04-08 11:27:45
     *
     * @var string
     */
    public $lastModifyTime;

    /**
     * @description The ID of the ticket.
     *
     * @example 51****
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The type of the ticket.
     *
     * @example DC_COMMON
     *
     * @var string
     */
    public $pluginType;

    /**
     * @description The status code of the ticket. Valid values:
     *
     *   **fail**: The ticket fails to be executed.
     *   **toaudit**: The ticket is waiting for approval.
     *   **cancel**: The ticket is cancelled.
     *   **processing**: The ticket is being executed.
     *   **approved**: The ticket is approved.
     *   **reject**: The ticket is rejected.
     *   **success**: The ticket is executed.
     *   **closed**: The ticket is closed.
     *
     * @example success
     *
     * @var string
     */
    public $statusCode;

    /**
     * @description The status description of the ticket.
     *
     * @var string
     */
    public $statusDesc;
    protected $_name = [
        'comment'        => 'Comment',
        'committer'      => 'Committer',
        'committerId'    => 'CommitterId',
        'createTime'     => 'CreateTime',
        'lastModifyTime' => 'LastModifyTime',
        'orderId'        => 'OrderId',
        'pluginType'     => 'PluginType',
        'statusCode'     => 'StatusCode',
        'statusDesc'     => 'StatusDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->committer) {
            $res['Committer'] = $this->committer;
        }
        if (null !== $this->committerId) {
            $res['CommitterId'] = $this->committerId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->pluginType) {
            $res['PluginType'] = $this->pluginType;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return order
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Committer'])) {
            $model->committer = $map['Committer'];
        }
        if (isset($map['CommitterId'])) {
            $model->committerId = $map['CommitterId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['PluginType'])) {
            $model->pluginType = $map['PluginType'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }

        return $model;
    }
}
