<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class DescribeInspectionResultRequest extends Model
{
    /**
     * @var int
     */
    public $continuousDays;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $riskCode;

    /**
     * @var int
     */
    public $severity;
    protected $_name = [
        'continuousDays' => 'ContinuousDays',
        'currentPage'    => 'CurrentPage',
        'operaUid'       => 'OperaUid',
        'pageSize'       => 'PageSize',
        'riskCode'       => 'RiskCode',
        'severity'       => 'Severity',
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
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->riskCode) {
            $res['RiskCode'] = $this->riskCode;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInspectionResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContinuousDays'])) {
            $model->continuousDays = $map['ContinuousDays'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RiskCode'])) {
            $model->riskCode = $map['RiskCode'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        return $model;
    }
}
