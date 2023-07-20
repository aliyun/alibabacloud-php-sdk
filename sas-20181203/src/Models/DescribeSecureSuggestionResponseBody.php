<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecureSuggestionResponseBody\suggestions;
use AlibabaCloud\Tea\Model;

class DescribeSecureSuggestionResponseBody extends Model
{
    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 676F80E3-4B3F-43DA-9CBB-5FF79F202AA2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The sub-type of the unhandled risk. Valid values:
     *
     *   **ALARM_HIGH**: Unhandled Urgency Alerts
     *   **ALARM_MEDIUM**: Unhandled Warning Alerts
     *   **ALARM_LOW**: Unhandled Reminder Alerts
     *   **VUL_EMR_UNCHECK**: Unchecked Urgent Vulnerabilities
     *   **VUL_EMR_UNFIX**: Unfixed Urgent Vulnerabilities
     *   **VUL_WIN**: Unfixed Windows Server Vulnerabilities
     *   **VUL_LINUX**: Unfixed Linux Server Vulnerabilities
     *   **VUL_CMS**: Unfixed CMS Vulnerabilities
     *   **ACCESSKEY_LEAK**: AccessKey Leakage Risks
     *   **HC_WARN**: Baseline Risks
     *   **HC_WEAK_EXPLOIT_WARN**: There is a risk of weak passwords exposed by the public network.
     *   **HC_WEAK_PASSWORD_WARN**: Risk of weak password
     *   **HC_HIGH_EXPLOIT_WARN**: There is a high risk of invasion
     *   **HC_OTHER_WARN**: Security Configuration risk
     *   **HC_DATABASE_WARN**: Database has security risks
     *   **CLOUD_HC_SAS_OPEN**: Security protection has not been installed on the server
     *   **CLOUD_HC_AEGIS_OFFLINE**: Server protection status is offline
     *   **CLOUD_HC_ACCOUNT_DOUBLE_CHECK**: Two-Factor Authentication not Enabled for Primary Account
     *   **CLOUD_HC_RDS**: RDS-database security policy failed, security risks
     *   **CLOUD_HC_DDOS**: Risks in Anti-DDoS Pro Back-to-Origin Settings
     *   **CLOUD_HC_HIGH_LEVEL**: Cloud product configuration has high risk
     *   **CLOUD_HC_OTHER_LEVEL**: Cloud product configuration has medium and low risk risks
     *   **OTHER_ATTACH**: Attacks
     *   **OTHER_DATABASE_ATTACH**: Database has security risks
     *   **REINFORCE_BASELINE**: Config Assessment
     *   **REINFORCE_SUSPICIOUS**: Antivirus
     *   **REINFORCE_ANALYSIS**: Log Analysis
     *   **REINFORCE_AK_LEAK**: AccessKey Leaked Intelligence Detection
     *   **REINFORCE_WEB_LOCK**: Website tamper-proofing capability not configured
     *   **REINFORCE_BRUTE_FORCE**: Anti brute force cracking
     *   **REINFORCE_XPRESS_INSTALL**: One-click client installation
     *   **REINFORCE_RANSOMWARE**: Enable anti-extortion strategy
     *   **REINFORCE_UNI_RANSOMWARE**: Anti-ransomware for Databases
     *   **REINFORCE_VIRUS_SCHEDULE_SCAN**: Periodic virus scan policies not configured
     *   **REINFORCE_IMAGE_REPO_SCAN**: No container image scan range configured
     *   **REINFORCE_IMAGE_SCAN_TASK**: Image security scan
     *   **REINFORCE_K8S_LOG_ANALYSIS**: Container K8s threat detection is disabled
     *   **REINFORCE_CONTAINER_NETWORK**: Container Visualization
     *
     * @var suggestions[]
     */
    public $suggestions;

    /**
     * @description The total number of unhandled security risks.
     *
     * @example 15
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'   => 'RequestId',
        'suggestions' => 'Suggestions',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->suggestions) {
            $res['Suggestions'] = [];
            if (null !== $this->suggestions && \is_array($this->suggestions)) {
                $n = 0;
                foreach ($this->suggestions as $item) {
                    $res['Suggestions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecureSuggestionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Suggestions'])) {
            if (!empty($map['Suggestions'])) {
                $model->suggestions = [];
                $n                  = 0;
                foreach ($map['Suggestions'] as $item) {
                    $model->suggestions[$n++] = null !== $item ? suggestions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
