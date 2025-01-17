<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeVolDingdingMessageResponseBody extends Model
{
    /**
     * @var string
     */
    public $dingdingUrl;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dingdingUrl' => 'DingdingUrl',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dingdingUrl) {
            $res['DingdingUrl'] = $this->dingdingUrl;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DingdingUrl'])) {
            $model->dingdingUrl = $map['DingdingUrl'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
