<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponseBody\emrZoneInfoList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponseBody\emrZoneInfoList\emrZoneInfo\emrResourceInfoList;
use AlibabaCloud\Tea\Model;

class emrZoneInfo extends Model
{
    /**
     * @var emrResourceInfoList
     */
    public $emrResourceInfoList;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'emrResourceInfoList' => 'EmrResourceInfoList',
        'zoneId'              => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->emrResourceInfoList) {
            $res['EmrResourceInfoList'] = null !== $this->emrResourceInfoList ? $this->emrResourceInfoList->toMap() : null;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['EmrResourceInfoList'])) {
            $model->emrResourceInfoList = emrResourceInfoList::fromMap($map['EmrResourceInfoList']);
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
