<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTagScanResultResponseBody;

use AlibabaCloud\Tea\Model;

class vulnerabilities extends Model
{
    /**
     * @description The ID of the image layer where the vulnerability was detected.
     *
     * @example sha256:123456717b8e40b6480979b739010d8d549989602bcdd07922119aec6f9dbe57
     *
     * @var string
     */
    public $addedBy;

    /**
     * @description The name of the vulnerability.
     *
     * @example Vulnerability
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The URL of the vulnerability.
     *
     * @example https://security-tracker.debian.org/tracker/CVE-2009-5155
     *
     * @var string
     */
    public $cveLink;

    /**
     * @description The directory of the vulnerability.
     *
     * @example /test.txt
     *
     * @var string
     */
    public $cveLocation;

    /**
     * @description The name of the vulnerability.
     *
     * @example CVE-2009-5155
     *
     * @var string
     */
    public $cveName;

    /**
     * @description The description of the vulnerability.
     *
     * @example description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The cause of the vulnerability.
     *
     * @example eglibc
     *
     * @var string
     */
    public $feature;

    /**
     * @description The command used to fix the vulnerability.
     *
     * @example yum install -y xxx
     *
     * @var string
     */
    public $fixCmd;

    /**
     * @description The type of the vulnerability. Valid values:
     *
     *   `cve`: image system vulnerability
     *   `sca`: image application vulnerability
     *
     * @example cve
     *
     * @var string
     */
    public $scanType;

    /**
     * @description The severity of the vulnerability.
     *
     * @example Medium
     *
     * @var string
     */
    public $severity;

    /**
     * @description The version of the vulnerability.
     *
     * @example 2.19-6.9
     *
     * @var string
     */
    public $version;

    /**
     * @description The version where the vulnerability was fixed.
     *
     * @example 2.19-18+deb8u5
     *
     * @var string
     */
    public $versionFixed;

    /**
     * @description The format of the vulnerability.
     *
     * @example dpkg
     *
     * @var string
     */
    public $versionFormat;
    protected $_name = [
        'addedBy'       => 'AddedBy',
        'aliasName'     => 'AliasName',
        'cveLink'       => 'CveLink',
        'cveLocation'   => 'CveLocation',
        'cveName'       => 'CveName',
        'description'   => 'Description',
        'feature'       => 'Feature',
        'fixCmd'        => 'FixCmd',
        'scanType'      => 'ScanType',
        'severity'      => 'Severity',
        'version'       => 'Version',
        'versionFixed'  => 'VersionFixed',
        'versionFormat' => 'VersionFormat',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addedBy) {
            $res['AddedBy'] = $this->addedBy;
        }
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->cveLink) {
            $res['CveLink'] = $this->cveLink;
        }
        if (null !== $this->cveLocation) {
            $res['CveLocation'] = $this->cveLocation;
        }
        if (null !== $this->cveName) {
            $res['CveName'] = $this->cveName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->feature) {
            $res['Feature'] = $this->feature;
        }
        if (null !== $this->fixCmd) {
            $res['FixCmd'] = $this->fixCmd;
        }
        if (null !== $this->scanType) {
            $res['ScanType'] = $this->scanType;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->versionFixed) {
            $res['VersionFixed'] = $this->versionFixed;
        }
        if (null !== $this->versionFormat) {
            $res['VersionFormat'] = $this->versionFormat;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vulnerabilities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddedBy'])) {
            $model->addedBy = $map['AddedBy'];
        }
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['CveLink'])) {
            $model->cveLink = $map['CveLink'];
        }
        if (isset($map['CveLocation'])) {
            $model->cveLocation = $map['CveLocation'];
        }
        if (isset($map['CveName'])) {
            $model->cveName = $map['CveName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Feature'])) {
            $model->feature = $map['Feature'];
        }
        if (isset($map['FixCmd'])) {
            $model->fixCmd = $map['FixCmd'];
        }
        if (isset($map['ScanType'])) {
            $model->scanType = $map['ScanType'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['VersionFixed'])) {
            $model->versionFixed = $map['VersionFixed'];
        }
        if (isset($map['VersionFormat'])) {
            $model->versionFormat = $map['VersionFormat'];
        }

        return $model;
    }
}
