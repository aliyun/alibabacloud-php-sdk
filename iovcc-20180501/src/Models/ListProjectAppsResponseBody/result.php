<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListProjectAppsResponseBody;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListProjectAppsResponseBody\result\projectApps;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $totalPage;

    /**
     * @var projectApps[]
     */
    public $projectApps;
    protected $_name = [
        'totalCount'  => 'TotalCount',
        'totalPage'   => 'TotalPage',
        'projectApps' => 'ProjectApps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }
        if (null !== $this->projectApps) {
            $res['ProjectApps'] = [];
            if (null !== $this->projectApps && \is_array($this->projectApps)) {
                $n = 0;
                foreach ($this->projectApps as $item) {
                    $res['ProjectApps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }
        if (isset($map['ProjectApps'])) {
            if (!empty($map['ProjectApps'])) {
                $model->projectApps = [];
                $n                  = 0;
                foreach ($map['ProjectApps'] as $item) {
                    $model->projectApps[$n++] = null !== $item ? projectApps::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
