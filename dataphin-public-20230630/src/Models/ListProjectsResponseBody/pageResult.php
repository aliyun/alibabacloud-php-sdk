<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListProjectsResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListProjectsResponseBody\pageResult\projectList;
use AlibabaCloud\Tea\Model;

class pageResult extends Model
{
    /**
     * @var projectList[]
     */
    public $projectList;

    /**
     * @example 68
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'projectList' => 'ProjectList',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectList) {
            $res['ProjectList'] = [];
            if (null !== $this->projectList && \is_array($this->projectList)) {
                $n = 0;
                foreach ($this->projectList as $item) {
                    $res['ProjectList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectList'])) {
            if (!empty($map['ProjectList'])) {
                $model->projectList = [];
                $n = 0;
                foreach ($map['ProjectList'] as $item) {
                    $model->projectList[$n++] = null !== $item ? projectList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
