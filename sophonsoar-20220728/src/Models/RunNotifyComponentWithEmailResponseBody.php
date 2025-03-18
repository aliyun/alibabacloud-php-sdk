<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\RunNotifyComponentWithEmailResponseBody\page;
use AlibabaCloud\Tea\Model;

class RunNotifyComponentWithEmailResponseBody extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $data;

    /**
     * @var page
     */
    public $page;

    /**
     * @example D4CC979E-3D5B-5A6A-BC87-C93C9E861C7B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data' => 'Data',
        'page' => 'Page',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
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
     * @return RunNotifyComponentWithEmailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
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
