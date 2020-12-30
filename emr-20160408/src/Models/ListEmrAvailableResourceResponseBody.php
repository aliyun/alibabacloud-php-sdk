<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponseBody\emrZoneInfoList;
use AlibabaCloud\Tea\Model;

class ListEmrAvailableResourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var emrZoneInfoList
     */
    public $emrZoneInfoList;
    protected $_name = [
        'requestId'       => 'RequestId',
        'regionId'        => 'RegionId',
        'emrZoneInfoList' => 'EmrZoneInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->emrZoneInfoList) {
            $res['EmrZoneInfoList'] = null !== $this->emrZoneInfoList ? $this->emrZoneInfoList->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['EmrZoneInfoList'])) {
            $model->emrZoneInfoList = emrZoneInfoList::fromMap($map['EmrZoneInfoList']);
        }

        return $model;
    }
}
