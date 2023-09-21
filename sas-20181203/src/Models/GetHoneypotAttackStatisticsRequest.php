<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetHoneypotAttackStatisticsRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 1675058931215
     *
     * @var int
     */
    public $endTimeStamp;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $riskLevelList;

    /**
     * @example 47.92.139.**
     *
     * @var string
     */
    public $srcIp;

    /**
     * @example 1681624877761
     *
     * @var int
     */
    public $startTimeStamp;

    /**
     * @example TOP_ATTACKED_IP
     *
     * @var string
     */
    public $statisticsType;
    protected $_name = [
        'currentPage'    => 'CurrentPage',
        'endTimeStamp'   => 'EndTimeStamp',
        'lang'           => 'Lang',
        'pageSize'       => 'PageSize',
        'riskLevelList'  => 'RiskLevelList',
        'srcIp'          => 'SrcIp',
        'startTimeStamp' => 'StartTimeStamp',
        'statisticsType' => 'StatisticsType',
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
        if (null !== $this->endTimeStamp) {
            $res['EndTimeStamp'] = $this->endTimeStamp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (null !== $this->startTimeStamp) {
            $res['StartTimeStamp'] = $this->startTimeStamp;
        }
        if (null !== $this->statisticsType) {
            $res['StatisticsType'] = $this->statisticsType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHoneypotAttackStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTimeStamp'])) {
            $model->endTimeStamp = $map['EndTimeStamp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
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
        if (isset($map['StartTimeStamp'])) {
            $model->startTimeStamp = $map['StartTimeStamp'];
        }
        if (isset($map['StatisticsType'])) {
            $model->statisticsType = $map['StatisticsType'];
        }

        return $model;
    }
}
