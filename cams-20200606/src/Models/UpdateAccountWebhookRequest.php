<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class UpdateAccountWebhookRequest extends Model
{
    /**
     * @var string
     */
    public $custSpaceId;

    /**
     * @var string
     */
    public $httpFlag;

    /**
     * @var string
     */
    public $queueFlag;

    /**
     * @var string
     */
    public $statusCallbackUrl;
    protected $_name = [
        'custSpaceId' => 'CustSpaceId',
        'httpFlag' => 'HttpFlag',
        'queueFlag' => 'QueueFlag',
        'statusCallbackUrl' => 'StatusCallbackUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }

        if (null !== $this->httpFlag) {
            $res['HttpFlag'] = $this->httpFlag;
        }

        if (null !== $this->queueFlag) {
            $res['QueueFlag'] = $this->queueFlag;
        }

        if (null !== $this->statusCallbackUrl) {
            $res['StatusCallbackUrl'] = $this->statusCallbackUrl;
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
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }

        if (isset($map['HttpFlag'])) {
            $model->httpFlag = $map['HttpFlag'];
        }

        if (isset($map['QueueFlag'])) {
            $model->queueFlag = $map['QueueFlag'];
        }

        if (isset($map['StatusCallbackUrl'])) {
            $model->statusCallbackUrl = $map['StatusCallbackUrl'];
        }

        return $model;
    }
}
