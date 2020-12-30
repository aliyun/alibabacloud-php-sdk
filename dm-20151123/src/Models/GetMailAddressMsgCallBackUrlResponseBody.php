<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class GetMailAddressMsgCallBackUrlResponseBody extends Model
{
    /**
     * @var int
     */
    public $notifyUrlStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $notifyUrl;
    protected $_name = [
        'notifyUrlStatus' => 'NotifyUrlStatus',
        'requestId'       => 'RequestId',
        'notifyUrl'       => 'NotifyUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notifyUrlStatus) {
            $res['NotifyUrlStatus'] = $this->notifyUrlStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMailAddressMsgCallBackUrlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotifyUrlStatus'])) {
            $model->notifyUrlStatus = $map['NotifyUrlStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
        }

        return $model;
    }
}
