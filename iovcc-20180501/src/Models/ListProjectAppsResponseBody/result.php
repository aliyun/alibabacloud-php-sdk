<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListProjectAppsResponseBody;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListProjectAppsResponseBody\result\projectApps;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var projectApps[]
     */
    public $projectApps;

    /**
     * @var int
     */
    public $totalPage;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'projectApps' => 'ProjectApps',
        'totalPage'   => 'TotalPage',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectApps) {
            $res['ProjectApps'] = [];
            if (null !== $this->projectApps && \is_array($this->projectApps)) {
                $n = 0;
                foreach ($this->projectApps as $item) {
                    $res['ProjectApps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['ProjectApps'])) {
            if (!empty($map['ProjectApps'])) {
                $model->projectApps = [];
                $n                  = 0;
                foreach ($map['ProjectApps'] as $item) {
                    $model->projectApps[$n++] = null !== $item ? projectApps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
