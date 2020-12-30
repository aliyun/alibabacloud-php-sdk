<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeVolDingdingMessageResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $dingdingUrl;
    protected $_name = [
        'requestId'   => 'RequestId',
        'dingdingUrl' => 'DingdingUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dingdingUrl) {
            $res['DingdingUrl'] = $this->dingdingUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVolDingdingMessageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DingdingUrl'])) {
            $model->dingdingUrl = $map['DingdingUrl'];
        }

        return $model;
    }
}
