<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertsResponseBody\pageBean;
use AlibabaCloud\Tea\Model;

class ListAlertsResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @description The information about the array object.
     *
     * @var pageBean
     */
    public $pageBean;

    /**
     * @description The request ID.
     *
     * @example 2FC13182-B9AF-4E6B-BE51-72669B7C****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'message'   => 'Message',
        'pageBean'  => 'PageBean',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
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
     * @return ListAlertsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageBean'])) {
            $model->pageBean = pageBean::fromMap($map['PageBean']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
