<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponseBody\emrZoneInfoList\emrZoneInfo;
use AlibabaCloud\Tea\Model;

class emrZoneInfoList extends Model
{
    /**
     * @var emrZoneInfo[]
     */
    public $emrZoneInfo;
    protected $_name = [
        'emrZoneInfo' => 'EmrZoneInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->emrZoneInfo) {
            $res['EmrZoneInfo'] = [];
            if (null !== $this->emrZoneInfo && \is_array($this->emrZoneInfo)) {
                $n = 0;
                foreach ($this->emrZoneInfo as $item) {
                    $res['EmrZoneInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return emrZoneInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EmrZoneInfo'])) {
            if (!empty($map['EmrZoneInfo'])) {
                $model->emrZoneInfo = [];
                $n                  = 0;
                foreach ($map['EmrZoneInfo'] as $item) {
                    $model->emrZoneInfo[$n++] = null !== $item ? emrZoneInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
