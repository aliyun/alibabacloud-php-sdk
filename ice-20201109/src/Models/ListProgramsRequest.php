<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListProgramsRequest extends Model
{
    /**
     * @description The name of the channel.
     *
     * This parameter is required.
     *
     * @example MyChannel
     *
     * @var string
     */
    public $channelName;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: 20. Valid values: 1 to 100.
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The name of the program.
     *
     * @example program1
     *
     * @var string
     */
    public $programName;

    /**
     * @description The sorting order. By default, the query results are sorted by creation time in descending order. Valid values:
     *
     *   asc: ascending order.
     *   desc: descending order.
     *
     * @example desc
     *
     * @var string
     */
    public $sortBy;
    protected $_name = [
        'channelName' => 'ChannelName',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'programName' => 'ProgramName',
        'sortBy' => 'SortBy',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->programName) {
            $res['ProgramName'] = $this->programName;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProgramsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProgramName'])) {
            $model->programName = $map['ProgramName'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        return $model;
    }
}
