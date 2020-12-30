<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class ListTimeLinesRequest extends Model
{
    /**
     * @var string
     */
    public $direction;

    /**
     * @var int
     */
    public $photoSize;

    /**
     * @var int
     */
    public $cursor;

    /**
     * @var int
     */
    public $timeLineCount;

    /**
     * @var string
     */
    public $timeLineUnit;

    /**
     * @var string
     */
    public $filterBy;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $storeName;

    /**
     * @var string
     */
    public $libraryId;
    protected $_name = [
        'direction'     => 'Direction',
        'photoSize'     => 'PhotoSize',
        'cursor'        => 'Cursor',
        'timeLineCount' => 'TimeLineCount',
        'timeLineUnit'  => 'TimeLineUnit',
        'filterBy'      => 'FilterBy',
        'order'         => 'Order',
        'storeName'     => 'StoreName',
        'libraryId'     => 'LibraryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->photoSize) {
            $res['PhotoSize'] = $this->photoSize;
        }
        if (null !== $this->cursor) {
            $res['Cursor'] = $this->cursor;
        }
        if (null !== $this->timeLineCount) {
            $res['TimeLineCount'] = $this->timeLineCount;
        }
        if (null !== $this->timeLineUnit) {
            $res['TimeLineUnit'] = $this->timeLineUnit;
        }
        if (null !== $this->filterBy) {
            $res['FilterBy'] = $this->filterBy;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }
        if (null !== $this->libraryId) {
            $res['LibraryId'] = $this->libraryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTimeLinesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['PhotoSize'])) {
            $model->photoSize = $map['PhotoSize'];
        }
        if (isset($map['Cursor'])) {
            $model->cursor = $map['Cursor'];
        }
        if (isset($map['TimeLineCount'])) {
            $model->timeLineCount = $map['TimeLineCount'];
        }
        if (isset($map['TimeLineUnit'])) {
            $model->timeLineUnit = $map['TimeLineUnit'];
        }
        if (isset($map['FilterBy'])) {
            $model->filterBy = $map['FilterBy'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }
        if (isset($map['LibraryId'])) {
            $model->libraryId = $map['LibraryId'];
        }

        return $model;
    }
}
