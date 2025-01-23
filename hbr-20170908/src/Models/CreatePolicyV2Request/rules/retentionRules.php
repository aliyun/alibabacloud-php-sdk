<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyV2Request\rules;

use AlibabaCloud\Dara\Model;

class retentionRules extends Model
{
    /**
     * @var string
     */
    public $advancedRetentionType;
    /**
     * @var int
     */
    public $retention;
    /**
     * @var int
     */
    public $whichSnapshot;
    protected $_name = [
        'advancedRetentionType' => 'AdvancedRetentionType',
        'retention'             => 'Retention',
        'whichSnapshot'         => 'WhichSnapshot',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advancedRetentionType) {
            $res['AdvancedRetentionType'] = $this->advancedRetentionType;
        }

        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }

        if (null !== $this->whichSnapshot) {
            $res['WhichSnapshot'] = $this->whichSnapshot;
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
        if (isset($map['AdvancedRetentionType'])) {
            $model->advancedRetentionType = $map['AdvancedRetentionType'];
        }

        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }

        if (isset($map['WhichSnapshot'])) {
            $model->whichSnapshot = $map['WhichSnapshot'];
        }

        return $model;
    }
}
