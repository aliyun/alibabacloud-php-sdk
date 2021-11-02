<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodStorageDataResponseBody\storageData;

use AlibabaCloud\Tea\Model;

class storageDataItem extends Model
{
    /**
     * @var string
     */
    public $networkOut;

    /**
     * @var string
     */
    public $storageUtilization;

    /**
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
