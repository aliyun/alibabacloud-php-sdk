<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class DescribeRiskResultSeveritySummaryRequest extends Model
{
    /**
     * @var int
     */
    public $continuousDays;

    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'continuousDays' => 'ContinuousDays',
        'operaUid'       => 'OperaUid',
        'productCode'    => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->continuousDays) {
            $res['ContinuousDays'] = $this->continuousDays;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRiskResultSeveritySummaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContinuousDays'])) {
            $model->continuousDays = $map['ContinuousDays'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
