<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeWebhookContactsResponseBody\pageBean;
use AlibabaCloud\Tea\Model;

class DescribeWebhookContactsResponseBody extends Model
{
    /**
     * @description The returned objects.
     *
     * @var pageBean
     */
    public $pageBean;

    /**
     * @description The request ID.
     *
     * @example 4D6C358A-A58B-4F4B-94CE-F5AAF023****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pageBean' => 'PageBean',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageBean) {
            $res['PageBean'] = null !== $this->pageBean ? $this->pageBean->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebhookContactsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageBean'])) {
            $model->pageBean = pageBean::fromMap($map['PageBean']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
