<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\ModifyRuleResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var mixed[]
     */
    public $ruleMeta;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'status'      => 'Status',
        'gmtCreate'   => 'GmtCreate',
        'ruleMeta'    => 'RuleMeta',
        'gmtModified' => 'GmtModified',
        'ruleId'      => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->ruleMeta) {
            $res['RuleMeta'] = $this->ruleMeta;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['RuleMeta'])) {
            $model->ruleMeta = $map['RuleMeta'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
