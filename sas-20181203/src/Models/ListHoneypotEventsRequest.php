<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListHoneypotEventsRequest extends Model
{
    /**
     * @description The probe IDs.
     *
     * @var string[]
     */
    public $agentIdList;

    /**
     * @description The ID of the alert.
     *
     * @example 1259925
     *
     * @var int
     */
    public $alarmEventId;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The status of the event. Valid values:
     *
     *   **y**: handled
     *   **n**: unhandled
     *   **a**: all statuses
     *
     * @example y
     *
     * @var string
     */
    public $dealed;

    /**
     * @description The honeypot IDs.
     *
     * @var string[]
     */
    public $honeypotIdList;

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
     * @description The number of entries per page. Default value: **20**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the attacker profile.
     *
     * @example cd48604a-1694-4f03-ade0-ec6994c3*****
     *
     * @var string
     */
    public $portraitId;

    /**
     * @description The request ID.
     *
     * @example 2F9CE167-58D5-5DA6-AA3B-923EED02****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The risk levels.
     *
     * @var string[]
     */
    public $riskLevelList;

    /**
     * @description The source IP address of the attack.
     *
     * @example 185.237.96.***
     *
     * @var string
     */
    public $srcIp;
    protected $_name = [
        'agentIdList'    => 'AgentIdList',
        'alarmEventId'   => 'AlarmEventId',
        'currentPage'    => 'CurrentPage',
        'dealed'         => 'Dealed',
        'honeypotIdList' => 'HoneypotIdList',
        'lang'           => 'Lang',
        'pageSize'       => 'PageSize',
        'portraitId'     => 'PortraitId',
        'requestId'      => 'RequestId',
        'riskLevelList'  => 'RiskLevelList',
        'srcIp'          => 'SrcIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentIdList) {
            $res['AgentIdList'] = $this->agentIdList;
        }
        if (null !== $this->alarmEventId) {
            $res['AlarmEventId'] = $this->alarmEventId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }
        if (null !== $this->honeypotIdList) {
            $res['HoneypotIdList'] = $this->honeypotIdList;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->portraitId) {
            $res['PortraitId'] = $this->portraitId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return ListHoneypotEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentIdList'])) {
            if (!empty($map['AgentIdList'])) {
                $model->agentIdList = $map['AgentIdList'];
            }
        }
        if (isset($map['AlarmEventId'])) {
            $model->alarmEventId = $map['AlarmEventId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }
        if (isset($map['HoneypotIdList'])) {
            if (!empty($map['HoneypotIdList'])) {
                $model->honeypotIdList = $map['HoneypotIdList'];
            }
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PortraitId'])) {
            $model->portraitId = $map['PortraitId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
