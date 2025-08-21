<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnFullDomainsBlockIPHistoryResponseBody;

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
    public $deliverTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'blockIP' => 'BlockIP',
        'deliverTime' => 'DeliverTime',
        'status' => 'Status',
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

        if (null !== $this->deliverTime) {
            $res['DeliverTime'] = $this->deliverTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['DeliverTime'])) {
            $model->deliverTime = $map['DeliverTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
