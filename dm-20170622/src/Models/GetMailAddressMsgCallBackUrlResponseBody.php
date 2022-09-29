<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20170622\Models;

use AlibabaCloud\Tea\Model;

class GetMailAddressMsgCallBackUrlResponseBody extends Model
{
    /**
     * @var int
     */
    public $notifyUrl;

    /**
     * @var int
     */
    public $notifyUrlStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'notifyUrl'       => 'NotifyUrl',
        'notifyUrlStatus' => 'NotifyUrlStatus',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }
        if (null !== $this->notifyUrlStatus) {
            $res['NotifyUrlStatus'] = $this->notifyUrlStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
        }
        if (isset($map['NotifyUrlStatus'])) {
            $model->notifyUrlStatus = $map['NotifyUrlStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
