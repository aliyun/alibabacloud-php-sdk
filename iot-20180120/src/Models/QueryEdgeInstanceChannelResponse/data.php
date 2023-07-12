<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceChannelResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceChannelResponse\data\channelList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
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
    public $total;

    /**
     * @var channelList
     */
    public $channelList;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'total'       => 'Total',
        'channelList' => 'ChannelList',
    ];

    public function validate()
    {
        Model::validateRequired('currentPage', $this->currentPage, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('channelList', $this->channelList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->channelList) {
            $res['ChannelList'] = null !== $this->channelList ? $this->channelList->toMap() : null;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['ChannelList'])) {
            $model->channelList = channelList::fromMap($map['ChannelList']);
        }

        return $model;
    }
}
