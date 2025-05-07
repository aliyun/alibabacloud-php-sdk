<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncForLLMResponseBody\data\resultInfo\rules;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncForLLMResponseBody\data\resultInfo\rules\ruleHitInfo\conditionInfo;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncForLLMResponseBody\data\resultInfo\rules\ruleHitInfo\hit;

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
        'hit' => 'Hit',
        'rid' => 'Rid',
        'tid' => 'Tid',
    ];

    public function validate()
    {
        if (null !== $this->conditionInfo) {
            $this->conditionInfo->validate();
        }
        if (null !== $this->hit) {
            $this->hit->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditionInfo) {
            $res['ConditionInfo'] = null !== $this->conditionInfo ? $this->conditionInfo->toArray($noStream) : $this->conditionInfo;
        }

        if (null !== $this->hit) {
            $res['Hit'] = null !== $this->hit ? $this->hit->toArray($noStream) : $this->hit;
        }

        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
