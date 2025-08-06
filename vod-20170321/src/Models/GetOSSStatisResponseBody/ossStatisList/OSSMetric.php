<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetOSSStatisResponseBody\ossStatisList;

use AlibabaCloud\Dara\Model;

class OSSMetric extends Model
{
    /**
     * @var string
     */
    public $statTime;

    /**
     * @var string
     */
    public $statTimeUTC;

    /**
     * @var int
     */
    public $storageUtilization;
    protected $_name = [
        'statTime' => 'StatTime',
        'statTimeUTC' => 'StatTimeUTC',
        'storageUtilization' => 'StorageUtilization',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->statTime) {
            $res['StatTime'] = $this->statTime;
        }

        if (null !== $this->statTimeUTC) {
            $res['StatTimeUTC'] = $this->statTimeUTC;
        }

        if (null !== $this->storageUtilization) {
            $res['StorageUtilization'] = $this->storageUtilization;
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
        if (isset($map['StatTime'])) {
            $model->statTime = $map['StatTime'];
        }

        if (isset($map['StatTimeUTC'])) {
            $model->statTimeUTC = $map['StatTimeUTC'];
        }

        if (isset($map['StorageUtilization'])) {
            $model->storageUtilization = $map['StorageUtilization'];
        }

        return $model;
    }
}
