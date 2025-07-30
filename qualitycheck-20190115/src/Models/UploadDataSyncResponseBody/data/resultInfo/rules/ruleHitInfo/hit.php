<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo\rules\ruleHitInfo;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo\rules\ruleHitInfo\hit\conditionHitInfo;
use AlibabaCloud\Tea\Model;

class hit extends Model
{
    /**
     * @var conditionHitInfo[]
     */
    public $conditionHitInfo;
    protected $_name = [
        'conditionHitInfo' => 'ConditionHitInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionHitInfo) {
            $res['ConditionHitInfo'] = [];
            if (null !== $this->conditionHitInfo && \is_array($this->conditionHitInfo)) {
                $n = 0;
                foreach ($this->conditionHitInfo as $item) {
                    $res['ConditionHitInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionHitInfo'])) {
            if (!empty($map['ConditionHitInfo'])) {
                $model->conditionHitInfo = [];
                $n = 0;
                foreach ($map['ConditionHitInfo'] as $item) {
                    $model->conditionHitInfo[$n++] = null !== $item ? conditionHitInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
