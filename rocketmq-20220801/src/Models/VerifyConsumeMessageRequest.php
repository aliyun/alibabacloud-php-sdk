<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class VerifyConsumeMessageRequest extends Model
{
    /**
     * @description The client ID.
     *
     * This parameter is required.
     * @example zeekr-settlement-server-dc555456f-v2lcg@1@1@qfvorazqns
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The ID of the consumer group.
     *
     * This parameter is required.
     * @example TEST_FINANCE_STOCK_OUT_GROUP
     *
     * @var string
     */
    public $consumerGroupId;
    protected $_name = [
        'clientId'        => 'clientId',
        'consumerGroupId' => 'consumerGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['clientId'] = $this->clientId;
        }
        if (null !== $this->consumerGroupId) {
            $res['consumerGroupId'] = $this->consumerGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyConsumeMessageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientId'])) {
            $model->clientId = $map['clientId'];
        }
        if (isset($map['consumerGroupId'])) {
            $model->consumerGroupId = $map['consumerGroupId'];
        }

        return $model;
    }
}
