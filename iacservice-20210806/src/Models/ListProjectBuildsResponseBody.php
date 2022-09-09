<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\SDK\IaCService\V20210806\Models\ListProjectBuildsResponseBody\projectBuilds;
use AlibabaCloud\Tea\Model;

class ListProjectBuildsResponseBody extends Model
{
    /**
     * @var projectBuilds[]
     */
    public $projectBuilds;

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
        'requestId'     => 'requestId',
        'totalCount'    => 'totalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectBuilds) {
            $res['ProjectBuilds'] = [];
            if (null !== $this->projectBuilds && \is_array($this->projectBuilds)) {
                $n = 0;
                foreach ($this->projectBuilds as $item) {
                    $res['ProjectBuilds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectBuildsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectBuilds'])) {
            if (!empty($map['ProjectBuilds'])) {
                $model->projectBuilds = [];
                $n                    = 0;
                foreach ($map['ProjectBuilds'] as $item) {
                    $model->projectBuilds[$n++] = null !== $item ? projectBuilds::fromMap($item) : $item;
                }
            }
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
