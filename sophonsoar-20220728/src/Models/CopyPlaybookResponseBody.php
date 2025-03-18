<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\CopyPlaybookResponseBody\data;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\CopyPlaybookResponseBody\page;
use AlibabaCloud\Tea\Model;

class CopyPlaybookResponseBody extends Model
{
    /**
     * @var data
     */
    public $data;

    /**
     * @var page
     */
    public $page;

    /**
     * @example 2EC05B06-****-5F3E-****-3B1FAD76087A
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
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
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
     * @return CopyPlaybookResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
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
