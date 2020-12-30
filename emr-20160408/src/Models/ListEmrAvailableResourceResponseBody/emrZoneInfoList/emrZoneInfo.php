<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponseBody\emrZoneInfoList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponseBody\emrZoneInfoList\emrZoneInfo\emrResourceInfoList;
use AlibabaCloud\Tea\Model;

class emrZoneInfo extends Model
{
    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var emrResourceInfoList
     */
    public $emrResourceInfoList;
    protected $_name = [
        'zoneId'              => 'ZoneId',
        'emrResourceInfoList' => 'EmrResourceInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->emrResourceInfoList) {
            $res['EmrResourceInfoList'] = null !== $this->emrResourceInfoList ? $this->emrResourceInfoList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return emrZoneInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['EmrResourceInfoList'])) {
            $model->emrResourceInfoList = emrResourceInfoList::fromMap($map['EmrResourceInfoList']);
        }

        return $model;
    }
}
