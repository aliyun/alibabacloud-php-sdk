<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchEditingProjectResponseBody\projectList;

class SearchEditingProjectResponseBody extends Model
{
    /**
     * @var projectList
     */
    public $projectList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'projectList' => 'ProjectList',
        'requestId' => 'RequestId',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (null !== $this->projectList) {
            $this->projectList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectList) {
            $res['ProjectList'] = null !== $this->projectList ? $this->projectList->toArray($noStream) : $this->projectList;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
