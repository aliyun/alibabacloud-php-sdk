<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetHoneypotAttackStatisticsRequest extends Model
{
    /**
     * @description The page number. Pages start from page **1**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The end time. The value is a UNIX timestamp.
     *
     * @example 1675058931215
     *
     * @var int
     */
    public $endTimeStamp;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries per page. Default value: 20. If you leave this parameter empty, 20 entries are returned on each page. We recommend that you do not leave this parameter empty.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The risk levels.
     *
     * @var string[]
     */
    public $riskLevelList;

    /**
     * @description The source IP address of the attack.
     *
     * This parameter is required.
     * @example 47.92.139.**
     *
     * @var string
     */
    public $srcIp;

    /**
     * @description The start time. The value is a UNIX timestamp.
     *
     * @example 1681624877761
     *
     * @var int
     */
    public $startTimeStamp;

    /**
     * @description The type of the attack source statistics. Valid values:
     *
     *   **TOP_ATTACKED_AGENT**: the top 5 probes that are attacked the most frequently
     *   **TOP_ATTACKED_IP**: the top 5 IP addresses that are attacked the most frequently
     *   **ATTACK_EVENT_TYPE**: the type of the intrusion event
     *   **ATTACK_HONEYPOT_TYPE**: the type of the attacked honeypot
     *
     * This parameter is required.
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
