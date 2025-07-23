<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponseBody\alertActions;
use AlibabaCloud\Tea\Model;

class ListAlertActionsResponseBody extends Model
{
    /**
     * @var alertActions[]
     */
    public $alertActions;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 8FDE2569-626B-5176-9844-28877A*****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 9
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'alertActions' => 'alertActions',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'requestId' => 'requestId',
        'total' => 'total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertActions) {
            $res['alertActions'] = [];
            if (null !== $this->alertActions && \is_array($this->alertActions)) {
                $n = 0;
                foreach ($this->alertActions as $item) {
                    $res['alertActions'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAlertActionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alertActions'])) {
            if (!empty($map['alertActions'])) {
                $model->alertActions = [];
                $n = 0;
                foreach ($map['alertActions'] as $item) {
                    $model->alertActions[$n++] = null !== $item ? alertActions::fromMap($item) : $item;
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
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
