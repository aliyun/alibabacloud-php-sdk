<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeRisksRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $riskId;

    /**
     * @var string
     */
    public $riskName;
    protected $_name = [
        'lang'     => 'Lang',
        'limit'    => 'Limit',
        'riskId'   => 'RiskId',
        'riskName' => 'RiskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->riskId) {
            $res['RiskId'] = $this->riskId;
        }
        if (null !== $this->riskName) {
            $res['RiskName'] = $this->riskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRisksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['RiskId'])) {
            $model->riskId = $map['RiskId'];
        }
        if (isset($map['RiskName'])) {
            $model->riskName = $map['RiskName'];
        }

        return $model;
    }
}
