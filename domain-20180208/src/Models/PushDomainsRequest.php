<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Dara\Model;

class PushDomainsRequest extends Model
{
    /**
     * @var string[]
     */
    public $domainList;

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
        'domainList' => 'DomainList',
        'outBizId' => 'OutBizId',
        'publishRemark' => 'PublishRemark',
        'receiverAccount' => 'ReceiverAccount',
    ];

    public function validate()
    {
        if (\is_array($this->domainList)) {
            Model::validateArray($this->domainList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainList) {
            if (\is_array($this->domainList)) {
                $res['DomainList'] = [];
                $n1 = 0;
                foreach ($this->domainList as $item1) {
                    $res['DomainList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['DomainList'])) {
                $model->domainList = [];
                $n1 = 0;
                foreach ($map['DomainList'] as $item1) {
                    $model->domainList[$n1] = $item1;
                    ++$n1;
                }
            }
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
