<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\QueryReceiverByParamResponseBody\data;

use AlibabaCloud\Tea\Model;

class receiver extends Model
{
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
    public $createTime;

    /**
     * @var string
     */
    public $receiverId;

    /**
     * @var int
     */
    public $utcCreateTime;

    /**
     * @var string
     */
    public $receiversStatus;

    /**
     * @var string
     */
    public $count;

    /**
     * @var string
     */
    public $desc;
    protected $_name = [
        'receiversAlias'  => 'ReceiversAlias',
        'receiversName'   => 'ReceiversName',
        'createTime'      => 'CreateTime',
        'receiverId'      => 'ReceiverId',
        'utcCreateTime'   => 'UtcCreateTime',
        'receiversStatus' => 'ReceiversStatus',
        'count'           => 'Count',
        'desc'            => 'Desc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->receiversAlias) {
            $res['ReceiversAlias'] = $this->receiversAlias;
        }
        if (null !== $this->receiversName) {
            $res['ReceiversName'] = $this->receiversName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->receiverId) {
            $res['ReceiverId'] = $this->receiverId;
        }
        if (null !== $this->utcCreateTime) {
            $res['UtcCreateTime'] = $this->utcCreateTime;
        }
        if (null !== $this->receiversStatus) {
            $res['ReceiversStatus'] = $this->receiversStatus;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
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
        if (isset($map['ReceiversAlias'])) {
            $model->receiversAlias = $map['ReceiversAlias'];
        }
        if (isset($map['ReceiversName'])) {
            $model->receiversName = $map['ReceiversName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ReceiverId'])) {
            $model->receiverId = $map['ReceiverId'];
        }
        if (isset($map['UtcCreateTime'])) {
            $model->utcCreateTime = $map['UtcCreateTime'];
        }
        if (isset($map['ReceiversStatus'])) {
            $model->receiversStatus = $map['ReceiversStatus'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        return $model;
    }
}
