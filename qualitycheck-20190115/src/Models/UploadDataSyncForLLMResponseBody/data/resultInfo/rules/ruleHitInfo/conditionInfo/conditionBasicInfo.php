<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncForLLMResponseBody\data\resultInfo\rules\ruleHitInfo\conditionInfo;

use AlibabaCloud\Dara\Model;

class conditionBasicInfo extends Model
{
    /**
     * @var string
     */
    public $conditionInfoCid;
    protected $_name = [
        'conditionInfoCid' => 'ConditionInfoCid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditionInfoCid) {
            $res['ConditionInfoCid'] = $this->conditionInfoCid;
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
        if (isset($map['ConditionInfoCid'])) {
            $model->conditionInfoCid = $map['ConditionInfoCid'];
        }

        return $model;
    }
}
