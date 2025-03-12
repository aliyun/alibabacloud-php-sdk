<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetSecurityScoreRuleResponseBody\securityScoreRuleList;

use AlibabaCloud\Tea\Model;

class securityScoreItemList extends Model
{
    /**
     * @description The penalty point of the deduction item.
     *
     * @example 3
     *
     * @var int
     */
    public $score;

    /**
     * @description The threshold for the deduction item.
     *
     * >  Valid values: 0 to the deduction threshold of the deduction module.
     * @example 5
     *
     * @var int
     */
    public $scoreThreshold;

    /**
     * @description The deduction item of the deduction module. The following list describes the deduction modules and their deduction items:
     *
     *   SS_REINFORCE: issue in key feature configuration
     *
     *   XPRESS_INSTALL: Security Center is not authorized.
     *   REINFORCE_SUSPICIOUS: The antivirus feature is disabled.
     *   RANSOMWARE: The anti-ransomware policy is disabled.
     *   WEB_LOCK: The web tamper proofing feature is disabled.
     *   VIRUS_SCHEDULE_SCAN: The periodic virus scan policy is disabled.
     *   IMAGE_REPO_SCAN: The range of container image scan is not configured.
     *   IMAGE_SCAN_TASK: The feature of one-click scan of container images for security risks is not performed.
     *
     *   SS_ALARM: unhandled alert.
     *
     *   ALARM_SERIOUS: An unhandled high-risk alert event is detected.
     *   ALARM_SUSPICIOUS: An unhandled medium-risk alarm event is detected.
     *   ALARM_REMIND: An unhandled low-risk alarm event is detected.
     *
     *   SS_VUL: unfixed vulnerability
     *
     *   CMS_UNFIX: An unfixed Web-CMS vulnerability is detected.
     *   WIN_UNFIX: An unfixed Windows host vulnerability is detected.
     *   CVE_UNFIX: An unfixed Linux host vulnerability is detected.
     *   ERM_UNFIX: An unfixed urgent vulnerability is detected.
     *   ERM_UNCHECK: An undetected urgent vulnerability exists.
     *
     *   SS_HC: baseline risks
     *
     *   WEAK_EXPLOIT: Weak passwords are exposed to the Internet.
     *   WEAK_PASSWORD: Weak passwords exist.
     *   HC_EXPLOIT: The data source may be hacked.
     *   HC_OTHER_WARNING: Security configuration risks exist.
     *
     *   SS_CLOUD_HC: Cloud platform configuration check item problem.
     *
     *   CSPM_CIEM_NOT_PASS: A CIEM check item failed the check.
     *   CSPM_RISK_NOT_PASS: A security risk check item failed the check.
     *   CSPM_COMPLIANCE_NOT_PASS: A compliance check item failed the check.
     *
     *   SS_AK: risk of AccessKey pair leaks
     *
     * @example ALARM_SERIOUS
     *
     * @var string
     */
    public $subRuleType;

    /**
     * @description The description of the deduction item in a deduction module.
     *
     * @example Unhandled Urgent Alert Event Exists
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'score'          => 'Score',
        'scoreThreshold' => 'ScoreThreshold',
        'subRuleType'    => 'SubRuleType',
        'title'          => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->scoreThreshold) {
            $res['ScoreThreshold'] = $this->scoreThreshold;
        }
        if (null !== $this->subRuleType) {
            $res['SubRuleType'] = $this->subRuleType;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityScoreItemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['ScoreThreshold'])) {
            $model->scoreThreshold = $map['ScoreThreshold'];
        }
        if (isset($map['SubRuleType'])) {
            $model->subRuleType = $map['SubRuleType'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
