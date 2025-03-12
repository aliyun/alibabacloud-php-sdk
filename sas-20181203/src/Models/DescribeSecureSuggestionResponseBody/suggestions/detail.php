<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecureSuggestionResponseBody\suggestions;

use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @description The description of the suggestion.
     *
     * @example Malicious tampering of Web pages will affect your normal access to web page content, and may also lead to serious economic losses, brand losses, and even political risks. The webpage tamper-proof service can monitor the website directory in real time and restore the tampered files or directories through backup, so as to ensure that the website information of important systems is not tampered with maliciously and prevent the occurrence of horse hanging, black chain, illegal implantation of terrorist threats, pornography and other content.
     *
     * @var string
     */
    public $description;

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
     * @example REINFORCE_WEB_LOCK
     *
     * @var string
     */
    public $subType;

    /**
     * @description The name of the unhandled risk.
     *
     * @example Website tamper-proofing capability not configured
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'description' => 'Description',
        'subType'     => 'SubType',
        'title'       => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
