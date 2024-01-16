<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybooksResponseBody\page;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybooksResponseBody\playbooks;
use AlibabaCloud\Tea\Model;

class DescribePlaybooksResponseBody extends Model
{
    /**
     * @description The pagination information.
     *
     * @var page
     */
    public $page;

    /**
     * @description The list of playbooks.
     *
     * @var playbooks[]
     */
    public $playbooks;

    /**
     * @description The request ID.
     *
     * @example 138B5AB7-7F2B-5814-87A3-E3ECFE1F207E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'page'      => 'Page',
        'playbooks' => 'Playbooks',
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
        if (null !== $this->playbooks) {
            $res['Playbooks'] = [];
            if (null !== $this->playbooks && \is_array($this->playbooks)) {
                $n = 0;
                foreach ($this->playbooks as $item) {
                    $res['Playbooks'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribePlaybooksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }
        if (isset($map['Playbooks'])) {
            if (!empty($map['Playbooks'])) {
                $model->playbooks = [];
                $n                = 0;
                foreach ($map['Playbooks'] as $item) {
                    $model->playbooks[$n++] = null !== $item ? playbooks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
