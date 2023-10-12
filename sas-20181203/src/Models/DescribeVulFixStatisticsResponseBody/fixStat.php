<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulFixStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class fixStat extends Model
{
    /**
     * @description The number of vulnerabilities that are fixed on the current day.
     *
     * @example 10
     *
     * @var int
     */
    public $fixedTodayNum;

    /**
     * @description The total number of fixed vulnerabilities.
     *
     * @example 22
     *
     * @var int
     */
    public $fixedTotalNum;

    /**
     * @description The number of vulnerabilities that are being fixed.
     *
     * @example 17
     *
     * @var int
     */
    public $fixingNum;

    /**
     * @description The number of unfixed vulnerabilities.
     *
     * @example 8
     *
     * @var int
     */
    public $needFixNum;

    /**
     * @description The type of the vulnerability. Valid values:
     *
     *   **cve**: Linux software vulnerability
     *   **sys**: Windows system vulnerability
     *   **cms**: Web-CMS vulnerability
     *   **app**: application vulnerability
     *   **emg**: urgent vulnerability
     *
     * @example cve
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'fixedTodayNum' => 'FixedTodayNum',
        'fixedTotalNum' => 'FixedTotalNum',
        'fixingNum'     => 'FixingNum',
        'needFixNum'    => 'NeedFixNum',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fixedTodayNum) {
            $res['FixedTodayNum'] = $this->fixedTodayNum;
        }
        if (null !== $this->fixedTotalNum) {
            $res['FixedTotalNum'] = $this->fixedTotalNum;
        }
        if (null !== $this->fixingNum) {
            $res['FixingNum'] = $this->fixingNum;
        }
        if (null !== $this->needFixNum) {
            $res['NeedFixNum'] = $this->needFixNum;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fixStat
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FixedTodayNum'])) {
            $model->fixedTodayNum = $map['FixedTodayNum'];
        }
        if (isset($map['FixedTotalNum'])) {
            $model->fixedTotalNum = $map['FixedTotalNum'];
        }
        if (isset($map['FixingNum'])) {
            $model->fixingNum = $map['FixingNum'];
        }
        if (isset($map['NeedFixNum'])) {
            $model->needFixNum = $map['NeedFixNum'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
