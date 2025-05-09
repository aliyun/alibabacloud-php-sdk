<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListOrdersResponseBody\orders;

use AlibabaCloud\Dara\Model;

class order extends Model
{
    /**
     * @var string
     */
    public $comment;

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
    public $createTime;

    /**
     * @var string
     */
    public $lastModifyTime;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $pluginType;

    /**
     * @var string
     */
    public $statusCode;

    /**
     * @var string
     */
    public $statusDesc;
    protected $_name = [
        'comment' => 'Comment',
        'committer' => 'Committer',
        'committerId' => 'CommitterId',
        'createTime' => 'CreateTime',
        'lastModifyTime' => 'LastModifyTime',
        'orderId' => 'OrderId',
        'pluginType' => 'PluginType',
        'statusCode' => 'StatusCode',
        'statusDesc' => 'StatusDesc',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
