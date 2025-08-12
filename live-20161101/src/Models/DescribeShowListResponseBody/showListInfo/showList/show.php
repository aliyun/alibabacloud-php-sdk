<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeShowListResponseBody\showListInfo\showList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeShowListResponseBody\showListInfo\showList\show\resourceInfo;

class show extends Model
{
    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $repeatTimes;

    /**
     * @var resourceInfo
     */
    public $resourceInfo;

    /**
     * @var string
     */
    public $showId;

    /**
     * @var string
     */
    public $showName;
    protected $_name = [
        'duration' => 'Duration',
        'repeatTimes' => 'RepeatTimes',
        'resourceInfo' => 'ResourceInfo',
        'showId' => 'ShowId',
        'showName' => 'ShowName',
    ];

    public function validate()
    {
        if (null !== $this->resourceInfo) {
            $this->resourceInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->repeatTimes) {
            $res['RepeatTimes'] = $this->repeatTimes;
        }

        if (null !== $this->resourceInfo) {
            $res['ResourceInfo'] = null !== $this->resourceInfo ? $this->resourceInfo->toArray($noStream) : $this->resourceInfo;
        }

        if (null !== $this->showId) {
            $res['ShowId'] = $this->showId;
        }

        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['RepeatTimes'])) {
            $model->repeatTimes = $map['RepeatTimes'];
        }

        if (isset($map['ResourceInfo'])) {
            $model->resourceInfo = resourceInfo::fromMap($map['ResourceInfo']);
        }

        if (isset($map['ShowId'])) {
            $model->showId = $map['ShowId'];
        }

        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }

        return $model;
    }
}
