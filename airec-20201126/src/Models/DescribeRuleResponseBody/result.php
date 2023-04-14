<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\DescribeRuleResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 2020-04-27T06:38:28.000Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2020-04-27T06:38:28.000Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 98493A14-D619-4E88-9F8D-108939817F9F
     *
     * @var string
     */
    public $ruleId;

    /**
     * @example DRAFT
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'gmtCreate'   => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'ruleId'      => 'ruleId',
        'status'      => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
