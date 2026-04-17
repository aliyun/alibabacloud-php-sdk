<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertRobotsResponseBody\robots;

class ListAlertRobotsResponseBody extends Model
{
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
     * @var robots[]
     */
    public $robots;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'requestId' => 'requestId',
        'robots' => 'robots',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->robots)) {
            Model::validateArray($this->robots);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->robots) {
            if (\is_array($this->robots)) {
                $res['robots'] = [];
                $n1 = 0;
                foreach ($this->robots as $item1) {
                    $res['robots'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['robots'])) {
            if (!empty($map['robots'])) {
                $model->robots = [];
                $n1 = 0;
                foreach ($map['robots'] as $item1) {
                    $model->robots[$n1] = robots::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
