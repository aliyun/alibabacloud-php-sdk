<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayQuotaRuleResponseBody\data\conflictPreview;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $consumerId;

    /**
     * @var string
     */
    public $consumerName;
    protected $_name = [
        'consumerId' => 'consumerId',
        'consumerName' => 'consumerName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerId) {
            $res['consumerId'] = $this->consumerId;
        }

        if (null !== $this->consumerName) {
            $res['consumerName'] = $this->consumerName;
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
        if (isset($map['consumerId'])) {
            $model->consumerId = $map['consumerId'];
        }

        if (isset($map['consumerName'])) {
            $model->consumerName = $map['consumerName'];
        }

        return $model;
    }
}
