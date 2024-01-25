<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class DescribeHistoryRiskRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $lastFindTimeEnd;

    /**
     * @var string
     */
    public $lastFindTimeStart;

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
    public $productCode;

    /**
     * @var int
     */
    public $severity;
    protected $_name = [
        'currentPage'       => 'CurrentPage',
        'lastFindTimeEnd'   => 'LastFindTimeEnd',
        'lastFindTimeStart' => 'LastFindTimeStart',
        'operaUid'          => 'OperaUid',
        'pageSize'          => 'PageSize',
        'productCode'       => 'ProductCode',
        'severity'          => 'Severity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->lastFindTimeEnd) {
            $res['LastFindTimeEnd'] = $this->lastFindTimeEnd;
        }
        if (null !== $this->lastFindTimeStart) {
            $res['LastFindTimeStart'] = $this->lastFindTimeStart;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHistoryRiskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['LastFindTimeEnd'])) {
            $model->lastFindTimeEnd = $map['LastFindTimeEnd'];
        }
        if (isset($map['LastFindTimeStart'])) {
            $model->lastFindTimeStart = $map['LastFindTimeStart'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        return $model;
    }
}
