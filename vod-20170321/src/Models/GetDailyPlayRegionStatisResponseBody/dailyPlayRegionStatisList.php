<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetDailyPlayRegionStatisResponseBody;

use AlibabaCloud\Tea\Model;

class dailyPlayRegionStatisList extends Model
{
    /**
     * @example 2025-03-20
     *
     * @var string
     */
    public $date;

    /**
     * @example https://outin-e70266d4ed*******0163e1403e7.oss-cn-shanghai.aliyuncs.com/dataexport/play/cn_hangzhou_20250320_video_traffic.csv?*******
     *
     * @var string
     */
    public $fileUrl;
    protected $_name = [
        'date' => 'Date',
        'fileUrl' => 'FileUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dailyPlayRegionStatisList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        return $model;
    }
}
