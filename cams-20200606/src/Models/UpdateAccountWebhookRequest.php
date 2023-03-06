<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class UpdateAccountWebhookRequest extends Model
{
    /**
     * @description The space ID of the user under the ISV account.
     *
     * @example 293483938849493**
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description Specifies whether to use HTTP callbacks to receive receipts. Valid values: Y and N. A value of Y indicates that HTTP callbacks are used to receive receipts. A value of N indicates that HTTP callbacks are not used to receive receipts.
     *
     * @example Y
     *
     * @var string
     */
    public $httpFlag;

    /**
     * @description Specifies whether to use Message Service (MNS) queues to receive receipts. Valid values: Y and N. A value of Y indicates that MNS queues are used to receive receipts. A value of N indicates that MNS queues are not used to receive receipts.
     *
     * @example N
     *
     * @var string
     */
    public $queueFlag;

    /**
     * @description The callback URL to which status reports are sent by using HTTP callbacks.
     *
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
