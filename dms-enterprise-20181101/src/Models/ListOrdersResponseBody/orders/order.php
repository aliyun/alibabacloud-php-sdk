<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListOrdersResponseBody\orders;

use AlibabaCloud\Tea\Model;

class order extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $lastModifyTime;

    /**
     * @var string
     */
    public $statusCode;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $committer;

    /**
     * @var int
     */
    public $committerId;

    /**
     * @var string
     */
    public $statusDesc;

    /**
     * @var string
     */
    public $pluginType;

    /**
     * @var int
     */
    public $orderId;
    protected $_name = [
        'comment'        => 'Comment',
        'lastModifyTime' => 'LastModifyTime',
        'statusCode'     => 'StatusCode',
        'createTime'     => 'CreateTime',
        'committer'      => 'Committer',
        'committerId'    => 'CommitterId',
        'statusDesc'     => 'StatusDesc',
        'pluginType'     => 'PluginType',
        'orderId'        => 'OrderId',
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
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->committer) {
            $res['Committer'] = $this->committer;
        }
        if (null !== $this->committerId) {
            $res['CommitterId'] = $this->committerId;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }
        if (null !== $this->pluginType) {
            $res['PluginType'] = $this->pluginType;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
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
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Committer'])) {
            $model->committer = $map['Committer'];
        }
        if (isset($map['CommitterId'])) {
            $model->committerId = $map['CommitterId'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }
        if (isset($map['PluginType'])) {
            $model->pluginType = $map['PluginType'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
