<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationResponseBody\data\complianceList;

use AlibabaCloud\Dara\Model;

class rules extends Model
{
    /**
     * @var string
     */
    public $ruleDetail;

    /**
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'ruleDetail' => 'ruleDetail',
        'ruleId' => 'ruleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ruleDetail) {
            $res['ruleDetail'] = $this->ruleDetail;
        }

        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
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
        if (isset($map['ruleDetail'])) {
            $model->ruleDetail = $map['ruleDetail'];
        }

        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }

        return $model;
    }
}
