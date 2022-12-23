<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodStorageDataResponseBody\storageData;

use AlibabaCloud\Tea\Model;

class storageDataItem extends Model
{
    /**
     * @description The outbound traffic. Unit: byte. The outbound traffic is generated when videos are directly downloaded or played from OSS buckets without Alibaba Cloud CDN acceleration.
     *
     * @example 111111
     *
     * @var string
     */
    public $networkOut;

    /**
     * @description The storage volume. Unit: byte.
     *
     * @example 111111
     *
     * @var string
     */
    public $storageUtilization;

    /**
     * @description The timestamp of the returned data. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-02-01T15:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'networkOut'         => 'NetworkOut',
        'storageUtilization' => 'StorageUtilization',
        'timeStamp'          => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkOut) {
            $res['NetworkOut'] = $this->networkOut;
        }
        if (null !== $this->storageUtilization) {
            $res['StorageUtilization'] = $this->storageUtilization;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageDataItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkOut'])) {
            $model->networkOut = $map['NetworkOut'];
        }
        if (isset($map['StorageUtilization'])) {
            $model->storageUtilization = $map['StorageUtilization'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
