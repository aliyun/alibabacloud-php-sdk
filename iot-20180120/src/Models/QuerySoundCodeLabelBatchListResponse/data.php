<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySoundCodeLabelBatchListResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySoundCodeLabelBatchListResponse\data\list_;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $pageId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $total;

    /**
     * @var list_
     */
    public $list;
    protected $_name = [
        'pageId'   => 'PageId',
        'pageSize' => 'PageSize',
        'total'    => 'Total',
        'list'     => 'List',
    ];

    public function validate()
    {
        Model::validateRequired('pageId', $this->pageId, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('list', $this->list, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageId) {
            $res['PageId'] = $this->pageId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->list) {
            $res['List'] = null !== $this->list ? $this->list->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageId'])) {
            $model->pageId = $map['PageId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['List'])) {
            $model->list = list_::fromMap($map['List']);
        }

        return $model;
    }
}
