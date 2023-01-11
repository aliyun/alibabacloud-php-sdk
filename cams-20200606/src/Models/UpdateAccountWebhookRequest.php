<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class UpdateAccountWebhookRequest extends Model
{
    /**
     * @example 293483938849493
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @example Y
     *
     * @var string
     */
    public $httpFlag;

    /**
     * @example N
     *
     * @var string
     */
    public $queueFlag;

    /**
     * @example http://www.aliyun.com
     *
     * @var string
     */
    public $statusCallbackUrl;
    protected $_name = [
        'custSpaceId'       => 'CustSpaceId',
        'httpFlag'          => 'HttpFlag',
        'queueFlag'         => 'QueueFlag',
        'statusCallbackUrl' => 'StatusCallbackUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateAccountWebhookRequest
     */
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
