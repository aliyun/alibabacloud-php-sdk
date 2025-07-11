<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserAssetResponseBody;

use AlibabaCloud\Tea\Model;

class assets extends Model
{
    /**
     * @description The number of APIs returned.
     *
     * @example 134
     *
     * @var int
     */
    public $assetNum;

    /**
     * @description The time at which the API was called. The value is a UNIX timestamp displayed in UTC. Unit: seconds.
     *
     * @example 1723435200
     *
     * @var int
     */
    public $timeStamp;
    protected $_name = [
        'assetNum' => 'AssetNum',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetNum) {
            $res['AssetNum'] = $this->assetNum;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetNum'])) {
            $model->assetNum = $map['AssetNum'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
