<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeGroupProductionsResponseBody\data;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeGroupProductionsResponseBody\page;
use AlibabaCloud\Tea\Model;

class DescribeGroupProductionsResponseBody extends Model
{
    /**
     * @var data[]
     */
    public $data;

    /**
     * @var page
     */
    public $page;

    /**
     * @example 358E012F-B516-599D-9ED0-A1A361CDE615
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
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeGroupProductionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
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
