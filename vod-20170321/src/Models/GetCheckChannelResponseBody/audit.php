<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetCheckChannelResponseBody;

use AlibabaCloud\Dara\Model;

class audit extends Model
{
    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $customerId;

    /**
     * @var string
     */
    public $legalSwitch;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'channel' => 'Channel',
        'createTime' => 'CreateTime',
        'customerId' => 'CustomerId',
        'legalSwitch' => 'LegalSwitch',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->customerId) {
            $res['CustomerId'] = $this->customerId;
        }

        if (null !== $this->legalSwitch) {
            $res['LegalSwitch'] = $this->legalSwitch;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CustomerId'])) {
            $model->customerId = $map['CustomerId'];
        }

        if (isset($map['LegalSwitch'])) {
            $model->legalSwitch = $map['LegalSwitch'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
