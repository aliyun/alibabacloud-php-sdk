<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\SearchEditingProjectResponseBody\projectList;
use AlibabaCloud\Tea\Model;

class SearchEditingProjectResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var projectList
     */
    public $projectList;
    protected $_name = [
        'requestId'   => 'RequestId',
        'total'       => 'Total',
        'projectList' => 'ProjectList',
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
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->projectList) {
            $res['ProjectList'] = null !== $this->projectList ? $this->projectList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchEditingProjectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['ProjectList'])) {
            $model->projectList = projectList::fromMap($map['ProjectList']);
        }

        return $model;
    }
}
