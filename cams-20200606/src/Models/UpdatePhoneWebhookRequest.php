<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class UpdatePhoneWebhookRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 293483938849493****
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
     * @description This parameter is required.
     *
     * @example 8613800001234
     *
     * @var string
     */
    public $phoneNumber;

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

    /**
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
