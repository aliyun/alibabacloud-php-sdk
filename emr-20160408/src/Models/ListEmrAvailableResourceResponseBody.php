<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponseBody\emrZoneInfoList;
use AlibabaCloud\Tea\Model;

class ListEmrAvailableResourceResponseBody extends Model
{
    /**
     * @var emrZoneInfoList
     */
    public $emrZoneInfoList;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example BF4FBAC6-B03E-4BFB-B6DB-EB53C34F2E22
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'emrZoneInfoList' => 'EmrZoneInfoList',
        'regionId'        => 'RegionId',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->emrZoneInfoList) {
            $res['EmrZoneInfoList'] = null !== $this->emrZoneInfoList ? $this->emrZoneInfoList->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEmrAvailableResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EmrZoneInfoList'])) {
            $model->emrZoneInfoList = emrZoneInfoList::fromMap($map['EmrZoneInfoList']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
