<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationResponseBody\data\complianceList;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return rules
     */
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
