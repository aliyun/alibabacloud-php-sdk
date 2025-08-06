<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeFileIdPlayStatisByOriginResponseBody;

use AlibabaCloud\Dara\Model;

class filePlayStatisList extends Model
{
    /**
     * @var string
     */
    public $fileId;

    /**
     * @var int
     */
    public $flux;

    /**
     * @var int
     */
    public $playCount;

    /**
     * @var int
     */
    public $requestCount;

    /**
     * @var string
     */
    public $statisTime;
    protected $_name = [
        'fileId' => 'FileId',
        'flux' => 'Flux',
        'playCount' => 'PlayCount',
        'requestCount' => 'RequestCount',
        'statisTime' => 'StatisTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->flux) {
            $res['Flux'] = $this->flux;
        }

        if (null !== $this->playCount) {
            $res['PlayCount'] = $this->playCount;
        }

        if (null !== $this->requestCount) {
            $res['RequestCount'] = $this->requestCount;
        }

        if (null !== $this->statisTime) {
            $res['StatisTime'] = $this->statisTime;
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
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['Flux'])) {
            $model->flux = $map['Flux'];
        }

        if (isset($map['PlayCount'])) {
            $model->playCount = $map['PlayCount'];
        }

        if (isset($map['RequestCount'])) {
            $model->requestCount = $map['RequestCount'];
        }

        if (isset($map['StatisTime'])) {
            $model->statisTime = $map['StatisTime'];
        }

        return $model;
    }
}
