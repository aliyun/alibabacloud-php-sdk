<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookReleasesResponseBody\page;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookReleasesResponseBody\records;
use AlibabaCloud\Tea\Model;

class DescribePlaybookReleasesResponseBody extends Model
{
    /**
     * @description The pagination information.
     *
     * @var page
     */
    public $page;

    /**
     * @description The information about the playbook version.
     *
     * @var records[]
     */
    public $records;

    /**
     * @description The request ID.
     *
     * @example 3DFBE11C-6EB6-5166-92D6-3397796AFE1E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'page'      => 'Page',
        'records'   => 'Records',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toMap() : null;
        }
        if (null !== $this->records) {
            $res['Records'] = [];
            if (null !== $this->records && \is_array($this->records)) {
                $n = 0;
                foreach ($this->records as $item) {
                    $res['Records'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePlaybookReleasesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }
        if (isset($map['Records'])) {
            if (!empty($map['Records'])) {
                $model->records = [];
                $n              = 0;
                foreach ($map['Records'] as $item) {
                    $model->records[$n++] = null !== $item ? records::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
