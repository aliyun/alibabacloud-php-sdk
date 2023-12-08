<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListHoneypotAttackerSourceRequest extends Model
{
    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The end of the time range to query. This value is a timestamp.
     *
     * @example 1676945366221
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
     * @description The number of entries to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description An array that consists of risk levels.
     *
     * @var string[]
     */
    public $riskLevelList;

    /**
     * @description The source IP address of the attack.
     *
     * @example 175.136.230.***
     *
     * @var string
     */
    public $srcIp;

    /**
     * @description The beginning of the time range to query. This value is a timestamp.
     *
     * @example 1674007632124
     *
     * @var int
     */
    public $startTimeStamp;
    protected $_name = [
        'currentPage'    => 'CurrentPage',
        'endTimeStamp'   => 'EndTimeStamp',
        'lang'           => 'Lang',
        'pageSize'       => 'PageSize',
        'riskLevelList'  => 'RiskLevelList',
        'srcIp'          => 'SrcIp',
        'startTimeStamp' => 'StartTimeStamp',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHoneypotAttackerSourceRequest
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

        return $model;
    }
}
