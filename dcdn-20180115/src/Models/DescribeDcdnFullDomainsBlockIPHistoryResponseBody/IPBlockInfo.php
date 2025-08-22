<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnFullDomainsBlockIPHistoryResponseBody;

use AlibabaCloud\Dara\Model;

class IPBlockInfo extends Model
{
    /**
     * @var string
     */
    public $blockIP;

    /**
     * @var string
     */
    public $blockInterval;

    /**
     * @var string
     */
    public $deliverTime;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateType;
    protected $_name = [
        'blockIP' => 'BlockIP',
        'blockInterval' => 'BlockInterval',
        'deliverTime' => 'DeliverTime',
        'operationType' => 'OperationType',
        'status' => 'Status',
        'updateType' => 'UpdateType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockIP) {
            $res['BlockIP'] = $this->blockIP;
        }

        if (null !== $this->blockInterval) {
            $res['BlockInterval'] = $this->blockInterval;
        }

        if (null !== $this->deliverTime) {
            $res['DeliverTime'] = $this->deliverTime;
        }

        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateType) {
            $res['UpdateType'] = $this->updateType;
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
        if (isset($map['BlockIP'])) {
            $model->blockIP = $map['BlockIP'];
        }

        if (isset($map['BlockInterval'])) {
            $model->blockInterval = $map['BlockInterval'];
        }

        if (isset($map['DeliverTime'])) {
            $model->deliverTime = $map['DeliverTime'];
        }

        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateType'])) {
            $model->updateType = $map['UpdateType'];
        }

        return $model;
    }
}
