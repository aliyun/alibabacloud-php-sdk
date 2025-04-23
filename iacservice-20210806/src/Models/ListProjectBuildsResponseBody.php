<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListProjectBuildsResponseBody\projectBuilds;

class ListProjectBuildsResponseBody extends Model
{
    /**
     * @var projectBuilds[]
     */
    public $projectBuilds;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'projectBuilds' => 'ProjectBuilds',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'requestId' => 'requestId',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->projectBuilds)) {
            Model::validateArray($this->projectBuilds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectBuilds) {
            if (\is_array($this->projectBuilds)) {
                $res['ProjectBuilds'] = [];
                $n1 = 0;
                foreach ($this->projectBuilds as $item1) {
                    $res['ProjectBuilds'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['ProjectBuilds'])) {
            if (!empty($map['ProjectBuilds'])) {
                $model->projectBuilds = [];
                $n1 = 0;
                foreach ($map['ProjectBuilds'] as $item1) {
                    $model->projectBuilds[$n1++] = projectBuilds::fromMap($item1);
                }
            }
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
