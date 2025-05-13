<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponseBody\alertActions;

class ListAlertActionsResponseBody extends Model
{
    /**
     * @var alertActions[]
     */
    public $alertActions;

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
    public $total;
    protected $_name = [
        'alertActions' => 'alertActions',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'requestId' => 'requestId',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->alertActions)) {
            Model::validateArray($this->alertActions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertActions) {
            if (\is_array($this->alertActions)) {
                $res['alertActions'] = [];
                $n1 = 0;
                foreach ($this->alertActions as $item1) {
                    $res['alertActions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alertActions'])) {
            if (!empty($map['alertActions'])) {
                $model->alertActions = [];
                $n1 = 0;
                foreach ($map['alertActions'] as $item1) {
                    $model->alertActions[$n1++] = alertActions::fromMap($item1);
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
