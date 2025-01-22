<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class ListSchedulesRequest extends Model
{
    /**
     * @var string
     */
    public $channelName;
    /**
     * @var int
     */
    public $pageNo;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var int
     */
    public $windowDurationSeconds;
    protected $_name = [
        'channelName'           => 'ChannelName',
        'pageNo'                => 'PageNo',
        'pageSize'              => 'PageSize',
        'windowDurationSeconds' => 'WindowDurationSeconds',
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

        if (null !== $this->windowDurationSeconds) {
            $res['WindowDurationSeconds'] = $this->windowDurationSeconds;
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

        if (isset($map['WindowDurationSeconds'])) {
            $model->windowDurationSeconds = $map['WindowDurationSeconds'];
        }

        return $model;
    }
}
