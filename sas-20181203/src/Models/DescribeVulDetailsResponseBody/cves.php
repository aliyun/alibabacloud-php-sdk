<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulDetailsResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulDetailsResponseBody\cves\classifys;
use AlibabaCloud\Tea\Model;

class cves extends Model
{
    /**
     * @description The type of the vulnerability.
     *
     * @example remote_code_execution
     *
     * @var string
     */
    public $classify;

    /**
     * @description The vulnerability types.
     *
     * @var classifys[]
     */
    public $classifys;

    /**
     * @description The China National Vulnerability Database (CNVD) ID.
     *
     * @example CNVD-2019-9167
     *
     * @var string
     */
    public $cnvdId;

    /**
     * @description The difficulty level of exploiting the vulnerability. Valid values:
     *
     *   **LOW**
     *   **MEDIUM**
     *   **HIGH**
     *
     * @example LOW
     *
     * @var string
     */
    public $complexity;

    /**
     * @description The CVE content.
     *
     * @example Apache Shiro is a user authentication and authorization framework for a wide range of rights management applications.↵Recently, Apache Shiro released version 1.7.0, which fixes the Apache Shiro authentication bypass vulnerability (CVE-2020-17510).↵Attackers can bypass Shiro\\"s authentication using malicious requests containing payloads.↵↵Related bugs:↵CVE-2020-17510 Shiro < 1.7.0 Validation Bypass Vulnerability↵CVE-2020-13933 Shiro < 1.6.0 Validation Bypass Vulnerability↵CVE-2020-11989 Shiro < 1.5.3 Validation Bypass Vulnerability↵CVE-2020-1957 Shiro < 1.5.2 Validation Bypass Vulnerability↵CVE-2016-6802 Shiro < 1.3.2 Validation Bypass Vulnerability
     * Check whether the fastjson version currently running on the system is in the affected version and whether safeMode is configured to disable autoType. If it is in the affected version and safeMode is not configured to disable autoType, the vulnerability is considered to exist.
     * @var string
     */
    public $content;

    /**
     * @description The Common Vulnerabilities and Exposures (CVE) ID.
     *
     * @example CVE-2019-9167
     *
     * @var string
     */
    public $cveId;

    /**
     * @description The link to the CVE details.
     *
     * @example https://avd.aliyun.com/detail/CVE-2022-1184
     *
     * @var string
     */
    public $cveLink;

    /**
     * @description The Common Vulnerability Scoring System (CVSS) score of the vulnerability in the Alibaba Cloud vulnerability library.
     *
     * @example 10.0
     *
     * @var string
     */
    public $cvssScore;

    /**
     * @description The vector that is used to calculate the CVSS score.
     *
     * @example AV:N/AC:L/Au:N/C:C/I:C/A:C
     *
     * @var string
     */
    public $cvssVector;

    /**
     * @description The name of the instance.
     *
     * >  This parameter is deprecated. You can call the [DescribeVulList](~~DescribeVulList~~) operation to query the instance that is affected by the vulnerability.
     * @example sql-test-001
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the server.
     *
     * >  This parameter is deprecated. You can call the [DescribeVulList](~~DescribeVulList~~) operation to query the instance that is affected by the vulnerability.
     * @example 47.114.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the server.
     *
     * >  This parameter is deprecated. You can call the [DescribeVulList](~~DescribeVulList~~) operation to query the instance that is affected by the vulnerability.
     * @example 172.19.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The ID of the vulnerability.
     *
     * @example CVE-2020-8597
     *
     * @var string
     */
    public $otherId;

    /**
     * @description The POC content.
     *
     * @example NewDomain.html
     * </html>
     * @var string
     */
    public $poc;

    /**
     * @description The UNIX timestamp when the proof of concept (POC) was created. Unit: milliseconds.
     *
     * @example 1554189334000
     *
     * @var int
     */
    public $pocCreateTime;

    /**
     * @description The UNIX timestamp when the POC was disclosed. Unit: milliseconds.
     *
     * @example 1554189334000
     *
     * @var int
     */
    public $pocDisclosureTime;

    /**
     * @description The service that is affected by the vulnerability.
     *
     * @example Log4j2
     *
     * @var string
     */
    public $product;

    /**
     * @description The reference of the vulnerability in the Alibaba Cloud vulnerability library. The value is a URL.
     *
     * @example https://example.com
     *
     * @var string
     */
    public $reference;

    /**
     * @description The disclosure time that is displayed for the vulnerability in the Alibaba Cloud vulnerability library. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1554189334000
     *
     * @var int
     */
    public $releaseTime;

    /**
     * @description The fixing suggestions of the vulnerability.
     *
     * @example <p>At present, Chanjet has urgently released a vulnerability patch to fix the vulnerability. CNVD recommends affected units and users to upgrade to the latest version immediately:</p>↵<p>https://www.chanjetvip.com/product/goods/goods-detail?id=53aaa40295d458e44f5d3ce5</p>↵<p>At the same time, organizations and users affected by the vulnerability are requested to immediately follow the steps below to conduct self-inspection and repair work:</p>↵<ol>↵<li><p>User self-check steps:↵<br  />Check whether website/bin/load.aspx.cdcab7d2.compiled, website/bin/App_Web_load.aspx.cdcab7d2.dll, and tplus/Load.aspx files exist locally. If they exist, it means that they have been poisoned, and you must reinstall the system and install the product. patch.</p>↵</li>↵<li><p>Non-poisoned users please:↵<br  />1) Update the latest product patch.↵<br  />2) Install anti-virus software and update the virus database in time.↵<br  />3) Upgrade the lower version of IIS and Nginx to IIS10.0 and Windows 2016.↵<br  />4) Local installation customers need to confirm whether the backup file is complete as soon as possible, and do off-site backup. Customers on the cloud should enable the mirroring function in time.↵<br  />5) Users who fail to update the patch in time can contact Chanjet technical support and take temporary preventive measures such as deleting files.</p>↵</li>↵<li><p>Poisoned users please:↵<br  />1) Check whether the server has taken regular snapshots or backups. If so, you can restore data through snapshots or backups.↵<br  />2) Contact Chanjet technical support to confirm whether it has the conditions and operation methods to restore data from backup files.</p>↵</li>↵</ol>↵<p>If you have any technical problems, please contact Chanjet technical support: 4006600566-9</p>
     *
     * @var string
     */
    public $solution;

    /**
     * @description The introduction to the vulnerability.
     *
     * @example Chanjet T-Plus is an Internet business management software. There is an unauthorized access vulnerability in one of its interfaces disclosed on the Internet. Attackers can construct malicious requests to upload malicious files to execute arbitrary code and control the server.
     *
     * @var string
     */
    public $summary;

    /**
     * @description The ID of the asset that is scanned.
     *
     * >  This parameter is deprecated. You can call the [DescribeVulList](~~DescribeVulList~~) operation to query the instance that is affected by the vulnerability.
     * @example m-bp17m0pc0xprzbwo****
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The name of the asset that is scanned.
     *
     * >  This parameter is deprecated. You can call the [DescribeVulList](~~DescribeVulList~~) operation to query the instance that is affected by the vulnerability.
     * @example frontend
     *
     * @var string
     */
    public $targetName;

    /**
     * @description The title of the vulnerability announcement.
     *
     * @example Chanjet T-Plus SetupAccount/Upload. Aspx file upload vulnerability(CNVD-2022-60632)
     *
     * @var string
     */
    public $title;

    /**
     * @description The vendor that disclosed the vulnerability.
     *
     * @example Apache
     *
     * @var string
     */
    public $vendor;

    /**
     * @description The severity of the vulnerability. Valid values:
     *
     *   **serious**
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example serious
     *
     * @var string
     */
    public $vulLevel;
    protected $_name = [
        'classify'          => 'Classify',
        'classifys'         => 'Classifys',
        'cnvdId'            => 'CnvdId',
        'complexity'        => 'Complexity',
        'content'           => 'Content',
        'cveId'             => 'CveId',
        'cveLink'           => 'CveLink',
        'cvssScore'         => 'CvssScore',
        'cvssVector'        => 'CvssVector',
        'instanceName'      => 'InstanceName',
        'internetIp'        => 'InternetIp',
        'intranetIp'        => 'IntranetIp',
        'otherId'           => 'OtherId',
        'poc'               => 'Poc',
        'pocCreateTime'     => 'PocCreateTime',
        'pocDisclosureTime' => 'PocDisclosureTime',
        'product'           => 'Product',
        'reference'         => 'Reference',
        'releaseTime'       => 'ReleaseTime',
        'solution'          => 'Solution',
        'summary'           => 'Summary',
        'targetId'          => 'TargetId',
        'targetName'        => 'TargetName',
        'title'             => 'Title',
        'vendor'            => 'Vendor',
        'vulLevel'          => 'VulLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }
        if (null !== $this->classifys) {
            $res['Classifys'] = [];
            if (null !== $this->classifys && \is_array($this->classifys)) {
                $n = 0;
                foreach ($this->classifys as $item) {
                    $res['Classifys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cnvdId) {
            $res['CnvdId'] = $this->cnvdId;
        }
        if (null !== $this->complexity) {
            $res['Complexity'] = $this->complexity;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->cveId) {
            $res['CveId'] = $this->cveId;
        }
        if (null !== $this->cveLink) {
            $res['CveLink'] = $this->cveLink;
        }
        if (null !== $this->cvssScore) {
            $res['CvssScore'] = $this->cvssScore;
        }
        if (null !== $this->cvssVector) {
            $res['CvssVector'] = $this->cvssVector;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->otherId) {
            $res['OtherId'] = $this->otherId;
        }
        if (null !== $this->poc) {
            $res['Poc'] = $this->poc;
        }
        if (null !== $this->pocCreateTime) {
            $res['PocCreateTime'] = $this->pocCreateTime;
        }
        if (null !== $this->pocDisclosureTime) {
            $res['PocDisclosureTime'] = $this->pocDisclosureTime;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->reference) {
            $res['Reference'] = $this->reference;
        }
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }
        if (null !== $this->solution) {
            $res['Solution'] = $this->solution;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }
        if (null !== $this->vulLevel) {
            $res['VulLevel'] = $this->vulLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cves
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }
        if (isset($map['Classifys'])) {
            if (!empty($map['Classifys'])) {
                $model->classifys = [];
                $n                = 0;
                foreach ($map['Classifys'] as $item) {
                    $model->classifys[$n++] = null !== $item ? classifys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CnvdId'])) {
            $model->cnvdId = $map['CnvdId'];
        }
        if (isset($map['Complexity'])) {
            $model->complexity = $map['Complexity'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CveId'])) {
            $model->cveId = $map['CveId'];
        }
        if (isset($map['CveLink'])) {
            $model->cveLink = $map['CveLink'];
        }
        if (isset($map['CvssScore'])) {
            $model->cvssScore = $map['CvssScore'];
        }
        if (isset($map['CvssVector'])) {
            $model->cvssVector = $map['CvssVector'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['OtherId'])) {
            $model->otherId = $map['OtherId'];
        }
        if (isset($map['Poc'])) {
            $model->poc = $map['Poc'];
        }
        if (isset($map['PocCreateTime'])) {
            $model->pocCreateTime = $map['PocCreateTime'];
        }
        if (isset($map['PocDisclosureTime'])) {
            $model->pocDisclosureTime = $map['PocDisclosureTime'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['Reference'])) {
            $model->reference = $map['Reference'];
        }
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }
        if (isset($map['Solution'])) {
            $model->solution = $map['Solution'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }
        if (isset($map['VulLevel'])) {
            $model->vulLevel = $map['VulLevel'];
        }

        return $model;
    }
}
