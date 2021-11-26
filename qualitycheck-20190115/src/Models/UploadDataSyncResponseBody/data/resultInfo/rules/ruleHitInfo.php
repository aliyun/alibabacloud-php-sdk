<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo\rules;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo\rules\ruleHitInfo\conditionInfo;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo\rules\ruleHitInfo\hit;
use AlibabaCloud\Tea\Model;

class ruleHitInfo extends Model
{
    /**
     * @var conditionInfo
     */
    public $conditionInfo;

    /**
     * @var hit
     */
    public $hit;

    /**
     * @var string
     */
    public $rid;

    /**
     * @var string
     */
    public $tid;
    protected $_name = [
        'conditionInfo' => 'ConditionInfo',
        'hit'           => 'Hit',
        'rid'           => 'Rid',
        'tid'           => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionInfo) {
            $res['ConditionInfo'] = null !== $this->conditionInfo ? $this->conditionInfo->toMap() : null;
        }
        if (null !== $this->hit) {
            $res['Hit'] = null !== $this->hit ? $this->hit->toMap() : null;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleHitInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionInfo'])) {
            $model->conditionInfo = conditionInfo::fromMap($map['ConditionInfo']);
        }
        if (isset($map['Hit'])) {
            $model->hit = hit::fromMap($map['Hit']);
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
