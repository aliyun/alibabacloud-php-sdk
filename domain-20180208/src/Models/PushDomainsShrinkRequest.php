<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Dara\Model;

class PushDomainsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $domainListShrink;

    /**
     * @var string
     */
    public $outBizId;

    /**
     * @var string
     */
    public $publishRemark;

    /**
     * @var string
     */
    public $receiverAccount;
    protected $_name = [
        'domainListShrink' => 'DomainList',
        'outBizId' => 'OutBizId',
        'publishRemark' => 'PublishRemark',
        'receiverAccount' => 'ReceiverAccount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainListShrink) {
            $res['DomainList'] = $this->domainListShrink;
        }

        if (null !== $this->outBizId) {
            $res['OutBizId'] = $this->outBizId;
        }

        if (null !== $this->publishRemark) {
            $res['PublishRemark'] = $this->publishRemark;
        }

        if (null !== $this->receiverAccount) {
            $res['ReceiverAccount'] = $this->receiverAccount;
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
        if (isset($map['DomainList'])) {
            $model->domainListShrink = $map['DomainList'];
        }

        if (isset($map['OutBizId'])) {
            $model->outBizId = $map['OutBizId'];
        }

        if (isset($map['PublishRemark'])) {
            $model->publishRemark = $map['PublishRemark'];
        }

        if (isset($map['ReceiverAccount'])) {
            $model->receiverAccount = $map['ReceiverAccount'];
        }

        return $model;
    }
}
