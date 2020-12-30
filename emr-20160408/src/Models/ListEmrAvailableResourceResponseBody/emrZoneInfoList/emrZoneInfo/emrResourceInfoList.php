<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponseBody\emrZoneInfoList\emrZoneInfo;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponseBody\emrZoneInfoList\emrZoneInfo\emrResourceInfoList\emrResourceInfo;
use AlibabaCloud\Tea\Model;

class emrResourceInfoList extends Model
{
    /**
     * @var emrResourceInfo[]
     */
    public $emrResourceInfo;
    protected $_name = [
        'emrResourceInfo' => 'EmrResourceInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->emrResourceInfo) {
            $res['EmrResourceInfo'] = [];
            if (null !== $this->emrResourceInfo && \is_array($this->emrResourceInfo)) {
                $n = 0;
                foreach ($this->emrResourceInfo as $item) {
                    $res['EmrResourceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return emrResourceInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EmrResourceInfo'])) {
            if (!empty($map['EmrResourceInfo'])) {
                $model->emrResourceInfo = [];
                $n                      = 0;
                foreach ($map['EmrResourceInfo'] as $item) {
                    $model->emrResourceInfo[$n++] = null !== $item ? emrResourceInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
