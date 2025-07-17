<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListActivatedAlertsResponseBody\page;
use AlibabaCloud\Tea\Model;

class ListActivatedAlertsResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @description The struct returned.
     *
     * @var page
     */
    public $page;

    /**
     * @description The ID of the request.
     *
     * @example BDB74B8F-4123-482A-ABB7-7F440349****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'message' => 'Message',
        'page' => 'Page',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListActivatedAlertsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
