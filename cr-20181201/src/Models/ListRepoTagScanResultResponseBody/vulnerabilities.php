<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTagScanResultResponseBody;

use AlibabaCloud\Tea\Model;

class vulnerabilities extends Model
{
    /**
     * @var string
     */
    public $addedBy;

    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var string
     */
    public $cveLink;

    /**
     * @var string
     */
    public $cveLocation;

    /**
     * @var string
     */
    public $cveName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $feature;

    /**
     * @var string
     */
    public $fixCmd;

    /**
     * @var string
     */
    public $scanType;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $versionFixed;

    /**
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
