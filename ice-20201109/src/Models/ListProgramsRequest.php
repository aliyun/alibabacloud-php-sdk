<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class ListProgramsRequest extends Model
{
    /**
     * @var string
     */
    public $channelName;
    /**
     * @var string
     */
    public $pageNo;
    /**
     * @var string
     */
    public $pageSize;
    /**
     * @var string
     */
    public $programName;
    /**
     * @var string
     */
    public $sortBy;
    protected $_name = [
        'channelName' => 'ChannelName',
        'pageNo'      => 'PageNo',
        'pageSize'    => 'PageSize',
        'programName' => 'ProgramName',
        'sortBy'      => 'SortBy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
