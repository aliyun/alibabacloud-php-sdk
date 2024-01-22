<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationsResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationsResponseBody\data\applications;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The description of the application.
     *
     * @var applications[]
     */
    public $applications;

    /**
     * @description The number of application instances.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The tags of the application.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The information about applications.
     *
     * @example 2
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'applications' => 'Applications',
        'currentPage'  => 'CurrentPage',
        'pageSize'     => 'PageSize',
        'totalSize'    => 'TotalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applications) {
            $res['Applications'] = [];
            if (null !== $this->applications && \is_array($this->applications)) {
                $n = 0;
                foreach ($this->applications as $item) {
                    $res['Applications'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Applications'])) {
            if (!empty($map['Applications'])) {
                $model->applications = [];
                $n                   = 0;
                foreach ($map['Applications'] as $item) {
                    $model->applications[$n++] = null !== $item ? applications::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
