<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodStorageDataResponseBody\storageData;

use AlibabaCloud\Tea\Model;

class storageDataItem extends Model
{
    /**
     * @var string
     */
    public $storageUtilization;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $networkOut;
    protected $_name = [
        'storageUtilization' => 'StorageUtilization',
        'timeStamp'          => 'TimeStamp',
        'networkOut'         => 'NetworkOut',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageUtilization) {
            $res['StorageUtilization'] = $this->storageUtilization;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->networkOut) {
            $res['NetworkOut'] = $this->networkOut;
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
        if (isset($map['StorageUtilization'])) {
            $model->storageUtilization = $map['StorageUtilization'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['NetworkOut'])) {
            $model->networkOut = $map['NetworkOut'];
        }

        return $model;
    }
}
