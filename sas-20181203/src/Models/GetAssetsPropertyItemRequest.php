<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetAssetsPropertyItemRequest extends Model
{
    /**
     * @var string
     */
    public $biz;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var bool
     */
    public $forceFlush;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $searchInfo;

    /**
     * @var string
     */
    public $searchItem;
    protected $_name = [
        'biz'         => 'Biz',
        'currentPage' => 'CurrentPage',
        'forceFlush'  => 'ForceFlush',
        'lang'        => 'Lang',
        'pageSize'    => 'PageSize',
        'searchInfo'  => 'SearchInfo',
        'searchItem'  => 'SearchItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->biz) {
            $res['Biz'] = $this->biz;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->forceFlush) {
            $res['ForceFlush'] = $this->forceFlush;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchInfo) {
            $res['SearchInfo'] = $this->searchInfo;
        }
        if (null !== $this->searchItem) {
            $res['SearchItem'] = $this->searchItem;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAssetsPropertyItemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Biz'])) {
            $model->biz = $map['Biz'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['ForceFlush'])) {
            $model->forceFlush = $map['ForceFlush'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchInfo'])) {
            $model->searchInfo = $map['SearchInfo'];
        }
        if (isset($map['SearchItem'])) {
            $model->searchItem = $map['SearchItem'];
        }

        return $model;
    }
}
