<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ListBrowserBookmarksRequest extends Model
{
    /**
     * @var string
     */
    public $browserInstanceGroupId;

    /**
     * @var string
     */
    public $browserInstanceGroupSetId;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'browserInstanceGroupId' => 'BrowserInstanceGroupId',
        'browserInstanceGroupSetId' => 'BrowserInstanceGroupSetId',
        'keyword' => 'Keyword',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->browserInstanceGroupId) {
            $res['BrowserInstanceGroupId'] = $this->browserInstanceGroupId;
        }

        if (null !== $this->browserInstanceGroupSetId) {
            $res['BrowserInstanceGroupSetId'] = $this->browserInstanceGroupSetId;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['BrowserInstanceGroupId'])) {
            $model->browserInstanceGroupId = $map['BrowserInstanceGroupId'];
        }

        if (isset($map['BrowserInstanceGroupSetId'])) {
            $model->browserInstanceGroupSetId = $map['BrowserInstanceGroupSetId'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
