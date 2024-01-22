<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListAppEventsResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\ListAppEventsResponseBody\data\appEventEntity;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The events.
     *
     * @var appEventEntity[]
     */
    public $appEventEntity;

    /**
     * @description The number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of events that occurred in an application.
     *
     * @example 20
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'appEventEntity' => 'AppEventEntity',
        'currentPage'    => 'CurrentPage',
        'pageSize'       => 'PageSize',
        'totalSize'      => 'TotalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appEventEntity) {
            $res['AppEventEntity'] = [];
            if (null !== $this->appEventEntity && \is_array($this->appEventEntity)) {
                $n = 0;
                foreach ($this->appEventEntity as $item) {
                    $res['AppEventEntity'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['AppEventEntity'])) {
            if (!empty($map['AppEventEntity'])) {
                $model->appEventEntity = [];
                $n                     = 0;
                foreach ($map['AppEventEntity'] as $item) {
                    $model->appEventEntity[$n++] = null !== $item ? appEventEntity::fromMap($item) : $item;
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
