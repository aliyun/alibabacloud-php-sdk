<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListAppEventsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListAppEventsResponseBody\data\appEventEntity;

class data extends Model
{
    /**
     * @var appEventEntity[]
     */
    public $appEventEntity;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'appEventEntity' => 'AppEventEntity',
        'currentPage' => 'CurrentPage',
        'pageSize' => 'PageSize',
        'totalSize' => 'TotalSize',
    ];

    public function validate()
    {
        if (\is_array($this->appEventEntity)) {
            Model::validateArray($this->appEventEntity);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appEventEntity) {
            if (\is_array($this->appEventEntity)) {
                $res['AppEventEntity'] = [];
                $n1 = 0;
                foreach ($this->appEventEntity as $item1) {
                    $res['AppEventEntity'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppEventEntity'])) {
            if (!empty($map['AppEventEntity'])) {
                $model->appEventEntity = [];
                $n1 = 0;
                foreach ($map['AppEventEntity'] as $item1) {
                    $model->appEventEntity[$n1] = appEventEntity::fromMap($item1);
                    ++$n1;
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
