<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetHoneypotEventTrendRequest extends Model
{
    /**
     * @description End time, timestamp format.
     *
     * @example 1687831329169
     *
     * @var int
     */
    public $endTimeStamp;

    /**
     * @description The language of the content within the request and response. Valid values:
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
     * @description The risk levels of the alert events.
     *
     * @var string[]
     */
    public $riskLevelList;

    /**
     * @description The source IP address of the attack.
     *
     * This parameter is required.
     * @example 10.91.254.***
     *
     * @var string
     */
    public $srcIp;

    /**
     * @description Start time, timestamp format.
     *
     * @example 1683516557757
     *
     * @var int
     */
    public $startTimeStamp;
    protected $_name = [
        'endTimeStamp'   => 'EndTimeStamp',
        'lang'           => 'Lang',
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
        if (null !== $this->endTimeStamp) {
            $res['EndTimeStamp'] = $this->endTimeStamp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
     * @return GetHoneypotEventTrendRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTimeStamp'])) {
            $model->endTimeStamp = $map['EndTimeStamp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
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
