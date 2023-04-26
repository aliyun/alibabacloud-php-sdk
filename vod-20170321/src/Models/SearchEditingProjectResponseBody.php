<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\SearchEditingProjectResponseBody\projectList;
use AlibabaCloud\Tea\Model;

class SearchEditingProjectResponseBody extends Model
{
    /**
     * @description The number of entries to return on each page. Default value: **10**. Maximum value: **100**.
     *
     * @var projectList
     */
    public $projectList;

    /**
     * @description The operation that you want to perform. Set the value to **SearchEditingProject**.
     *
     * @example 9262E3DA-07FA-48*****62-FCBB6BC61D08
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The time when the online editing project was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'projectList' => 'ProjectList',
        'requestId'   => 'RequestId',
        'total'       => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectList) {
            $res['ProjectList'] = null !== $this->projectList ? $this->projectList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['ProjectList'])) {
            $model->projectList = projectList::fromMap($map['ProjectList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
