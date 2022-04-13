<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\QueryReceiverByParamResponseBody\data;

use AlibabaCloud\Tea\Model;

class receiver extends Model
{
    /**
     * @var string
     */
    public $count;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $receiverId;

    /**
     * @var string
     */
    public $receiversAlias;

    /**
     * @var string
     */
    public $receiversName;

    /**
     * @var string
     */
    public $receiversStatus;

    /**
     * @var int
     */
    public $utcCreateTime;
    protected $_name = [
        'count'           => 'Count',
        'createTime'      => 'CreateTime',
        'desc'            => 'Desc',
        'receiverId'      => 'ReceiverId',
        'receiversAlias'  => 'ReceiversAlias',
        'receiversName'   => 'ReceiversName',
        'receiversStatus' => 'ReceiversStatus',
        'utcCreateTime'   => 'UtcCreateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->receiverId) {
            $res['ReceiverId'] = $this->receiverId;
        }
        if (null !== $this->receiversAlias) {
            $res['ReceiversAlias'] = $this->receiversAlias;
        }
        if (null !== $this->receiversName) {
            $res['ReceiversName'] = $this->receiversName;
        }
        if (null !== $this->receiversStatus) {
            $res['ReceiversStatus'] = $this->receiversStatus;
        }
        if (null !== $this->utcCreateTime) {
            $res['UtcCreateTime'] = $this->utcCreateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return receiver
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['ReceiverId'])) {
            $model->receiverId = $map['ReceiverId'];
        }
        if (isset($map['ReceiversAlias'])) {
            $model->receiversAlias = $map['ReceiversAlias'];
        }
        if (isset($map['ReceiversName'])) {
            $model->receiversName = $map['ReceiversName'];
        }
        if (isset($map['ReceiversStatus'])) {
            $model->receiversStatus = $map['ReceiversStatus'];
        }
        if (isset($map['UtcCreateTime'])) {
            $model->utcCreateTime = $map['UtcCreateTime'];
        }

        return $model;
    }
}
