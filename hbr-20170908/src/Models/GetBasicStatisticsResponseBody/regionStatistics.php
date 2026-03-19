<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\GetBasicStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class regionStatistics extends Model
{
    /**
     * @var int
     */
    public $protectedDataSize;

    /**
     * @var int
     */
    public $protectedResourceCount;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'protectedDataSize' => 'ProtectedDataSize',
        'protectedResourceCount' => 'ProtectedResourceCount',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->protectedDataSize) {
            $res['ProtectedDataSize'] = $this->protectedDataSize;
        }

        if (null !== $this->protectedResourceCount) {
            $res['ProtectedResourceCount'] = $this->protectedResourceCount;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ProtectedDataSize'])) {
            $model->protectedDataSize = $map['ProtectedDataSize'];
        }

        if (isset($map['ProtectedResourceCount'])) {
            $model->protectedResourceCount = $map['ProtectedResourceCount'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
