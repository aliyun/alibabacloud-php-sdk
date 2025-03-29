<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class ListKeywordsShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $libId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sortShrink;

    /**
     * @var string
     */
    public $word;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'libId' => 'LibId',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'sortShrink' => 'Sort',
        'word' => 'Word',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->libId) {
            $res['LibId'] = $this->libId;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sortShrink) {
            $res['Sort'] = $this->sortShrink;
        }

        if (null !== $this->word) {
            $res['Word'] = $this->word;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['LibId'])) {
            $model->libId = $map['LibId'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Sort'])) {
            $model->sortShrink = $map['Sort'];
        }

        if (isset($map['Word'])) {
            $model->word = $map['Word'];
        }

        return $model;
    }
}
