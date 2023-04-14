<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class UpdatePhoneWebhookRequest extends Model
{
    /**
     * @description The space ID of the user under the ISV account.
     *
     * @example 293483938849493****
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description Specifies whether to use HTTP callbacks to receive message receipts. Valid values:
     *
     *   Y: indicates that HTTP callbacks are used to receive message receipts.
     *   N: indicates that HTTP callbacks are not used to receive message receipts.
     *
     * @example Y
     *
     * @var string
     */
    public $httpFlag;

    /**
     * @description The phone number.
     *
     * @example 8613800001234
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description Specifies whether to use Message Service (MNS) queues to receive receipts. Valid values:
     *
     *   Y: indicates that MNS queues are used to receive receipts.
     *   N: indicates that MNS queues are not used to receive receipts.
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

    /**
     * @description The callback URL to which mobile originated (MO) messages are sent by using HTTP callbacks.
     *
     * @example http://aliyun.com
     *
     * @var string
     */
    public $upCallbackUrl;
    protected $_name = [
        'custSpaceId'       => 'CustSpaceId',
        'httpFlag'          => 'HttpFlag',
        'phoneNumber'       => 'PhoneNumber',
        'queueFlag'         => 'QueueFlag',
        'statusCallbackUrl' => 'StatusCallbackUrl',
        'upCallbackUrl'     => 'UpCallbackUrl',
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
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->queueFlag) {
            $res['QueueFlag'] = $this->queueFlag;
        }
        if (null !== $this->statusCallbackUrl) {
            $res['StatusCallbackUrl'] = $this->statusCallbackUrl;
        }
        if (null !== $this->upCallbackUrl) {
            $res['UpCallbackUrl'] = $this->upCallbackUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePhoneWebhookRequest
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
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['QueueFlag'])) {
            $model->queueFlag = $map['QueueFlag'];
        }
        if (isset($map['StatusCallbackUrl'])) {
            $model->statusCallbackUrl = $map['StatusCallbackUrl'];
        }
        if (isset($map['UpCallbackUrl'])) {
            $model->upCallbackUrl = $map['UpCallbackUrl'];
        }

        return $model;
    }
}
