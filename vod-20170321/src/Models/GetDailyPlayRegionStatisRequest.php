<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetDailyPlayRegionStatisRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 2025-03-20
     *
     * @var string
     */
    public $date;

    /**
     * @description This parameter is required.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $mediaRegion;
    protected $_name = [
        'date' => 'Date',
        'mediaRegion' => 'MediaRegion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->mediaRegion) {
            $res['MediaRegion'] = $this->mediaRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDailyPlayRegionStatisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['MediaRegion'])) {
            $model->mediaRegion = $map['MediaRegion'];
        }

        return $model;
    }
}
