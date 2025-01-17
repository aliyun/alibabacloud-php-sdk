<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class ListLiveTranscodeTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $category;
    /**
     * @var string
     */
    public $keyWord;
    /**
     * @var int
     */
    public $pageNo;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $sortBy;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $videoCodec;
    protected $_name = [
        'category'   => 'Category',
        'keyWord'    => 'KeyWord',
        'pageNo'     => 'PageNo',
        'pageSize'   => 'PageSize',
        'sortBy'     => 'SortBy',
        'type'       => 'Type',
        'videoCodec' => 'VideoCodec',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->keyWord) {
            $res['KeyWord'] = $this->keyWord;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->videoCodec) {
            $res['VideoCodec'] = $this->videoCodec;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['KeyWord'])) {
            $model->keyWord = $map['KeyWord'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['VideoCodec'])) {
            $model->videoCodec = $map['VideoCodec'];
        }

        return $model;
    }
}
