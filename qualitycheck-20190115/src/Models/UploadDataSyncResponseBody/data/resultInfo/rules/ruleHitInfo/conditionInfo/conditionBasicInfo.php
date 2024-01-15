<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo\rules\ruleHitInfo\conditionInfo;

use AlibabaCloud\Tea\Model;

class conditionBasicInfo extends Model
{
    /**
     * @example xxx
     *
     * @var string
     */
    public $conditionInfoCid;
    protected $_name = [
        'conditionInfoCid' => 'ConditionInfoCid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionInfoCid) {
            $res['ConditionInfoCid'] = $this->conditionInfoCid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditionBasicInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionInfoCid'])) {
            $model->conditionInfoCid = $map['ConditionInfoCid'];
        }

        return $model;
    }
}
