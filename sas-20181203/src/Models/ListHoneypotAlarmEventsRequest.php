<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListHoneypotAlarmEventsRequest extends Model
{
    /**
     * @description The number of entries to return on each page. Default value: **100**
     *
     * @example 10
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The source IP address.
     *
     * @example n
     *
     * @var string
     */
    public $dealed;

    /**
     * @description The risk levels of the alert events.
     *
     * @example 172.20.XX.XX
     *
     * @var string
     */
    public $dstIp;

    /**
     * @description The data returned.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The risk level. Valid values:
     *
     *   **2**: low
     *   **3**: medium
     *   **4**: high
     *
     * @var string[]
     */
    public $riskLevelList;

    /**
     * @description The destination IP address.
     *
     * @example 101.132.XX.XX
     *
     * @var string
     */
    public $srcIp;
    protected $_name = [
        'currentPage'   => 'CurrentPage',
        'dealed'        => 'Dealed',
        'dstIp'         => 'DstIp',
        'pageSize'      => 'PageSize',
        'riskLevelList' => 'RiskLevelList',
        'srcIp'         => 'SrcIp',
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
        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }
        if (null !== $this->dstIp) {
            $res['DstIp'] = $this->dstIp;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->riskLevelList) {
            $res['RiskLevelList'] = $this->riskLevelList;
        }
        if (null !== $this->srcIp) {
            $res['SrcIp'] = $this->srcIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHoneypotAlarmEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }
        if (isset($map['DstIp'])) {
            $model->dstIp = $map['DstIp'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RiskLevelList'])) {
            if (!empty($map['RiskLevelList'])) {
                $model->riskLevelList = $map['RiskLevelList'];
            }
        }
        if (isset($map['SrcIp'])) {
            $model->srcIp = $map['SrcIp'];
        }

        return $model;
    }
}
