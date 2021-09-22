<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeSmsSignStatusResponseBody\signStatuses;
use AlibabaCloud\Tea\Model;

class DescribeSmsSignStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var signStatuses[]
     */
    public $signStatuses;
    protected $_name = [
        'requestId'    => 'RequestId',
        'signStatuses' => 'SignStatuses',
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
        if (null !== $this->signStatuses) {
            $res['SignStatuses'] = [];
            if (null !== $this->signStatuses && \is_array($this->signStatuses)) {
                $n = 0;
                foreach ($this->signStatuses as $item) {
                    $res['SignStatuses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSmsSignStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SignStatuses'])) {
            if (!empty($map['SignStatuses'])) {
                $model->signStatuses = [];
                $n                   = 0;
                foreach ($map['SignStatuses'] as $item) {
                    $model->signStatuses[$n++] = null !== $item ? signStatuses::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
