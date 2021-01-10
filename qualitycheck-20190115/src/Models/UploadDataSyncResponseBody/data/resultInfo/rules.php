<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo\rules\ruleHitInfo;
use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @var ruleHitInfo[]
     */
    public $ruleHitInfo;
    protected $_name = [
        'ruleHitInfo' => 'RuleHitInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleHitInfo) {
            $res['RuleHitInfo'] = [];
            if (null !== $this->ruleHitInfo && \is_array($this->ruleHitInfo)) {
                $n = 0;
                foreach ($this->ruleHitInfo as $item) {
                    $res['RuleHitInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleHitInfo'])) {
            if (!empty($map['RuleHitInfo'])) {
                $model->ruleHitInfo = [];
                $n                  = 0;
                foreach ($map['RuleHitInfo'] as $item) {
                    $model->ruleHitInfo[$n++] = null !== $item ? ruleHitInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
