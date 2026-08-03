<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class ListDataAgentMemoryRequest extends Model
{
    /**
     * @var string
     */
    public $contentPattern;

    /**
     * @var string
     */
    public $DMSUnit;

    /**
     * @var string
     */
    public $fromId;

    /**
     * @var string
     */
    public $memFrom;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $queryAll;
    protected $_name = [
        'contentPattern' => 'ContentPattern',
        'DMSUnit' => 'DMSUnit',
        'fromId' => 'FromId',
        'memFrom' => 'MemFrom',
        'order' => 'Order',
        'orderBy' => 'OrderBy',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'queryAll' => 'QueryAll',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentPattern) {
            $res['ContentPattern'] = $this->contentPattern;
        }

        if (null !== $this->DMSUnit) {
            $res['DMSUnit'] = $this->DMSUnit;
        }

        if (null !== $this->fromId) {
            $res['FromId'] = $this->fromId;
        }

        if (null !== $this->memFrom) {
            $res['MemFrom'] = $this->memFrom;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->queryAll) {
            $res['QueryAll'] = $this->queryAll;
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
        if (isset($map['ContentPattern'])) {
            $model->contentPattern = $map['ContentPattern'];
        }

        if (isset($map['DMSUnit'])) {
            $model->DMSUnit = $map['DMSUnit'];
        }

        if (isset($map['FromId'])) {
            $model->fromId = $map['FromId'];
        }

        if (isset($map['MemFrom'])) {
            $model->memFrom = $map['MemFrom'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['QueryAll'])) {
            $model->queryAll = $map['QueryAll'];
        }

        return $model;
    }
}
