<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeVolDingdingMessageResponseBody
     */
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
