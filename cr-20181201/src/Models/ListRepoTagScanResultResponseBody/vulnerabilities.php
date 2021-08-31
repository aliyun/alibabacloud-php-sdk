<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTagScanResultResponseBody;

use AlibabaCloud\Tea\Model;

class vulnerabilities extends Model
{
    /**
     * @var string
     */
    public $severity;

    /**
     * @var string
     */
    public $addedBy;

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
    public $version;

    /**
     * @var string
     */
    public $versionFormat;

    /**
     * @var string
     */
    public $cveLink;

    /**
     * @var string
     */
    public $versionFixed;

    /**
     * @var string
     */
    public $fixCmd;
    protected $_name = [
        'severity'      => 'Severity',
        'addedBy'       => 'AddedBy',
        'cveName'       => 'CveName',
        'description'   => 'Description',
        'feature'       => 'Feature',
        'version'       => 'Version',
        'versionFormat' => 'VersionFormat',
        'cveLink'       => 'CveLink',
        'versionFixed'  => 'VersionFixed',
        'fixCmd'        => 'FixCmd',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->addedBy) {
            $res['AddedBy'] = $this->addedBy;
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
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->versionFormat) {
            $res['VersionFormat'] = $this->versionFormat;
        }
        if (null !== $this->cveLink) {
            $res['CveLink'] = $this->cveLink;
        }
        if (null !== $this->versionFixed) {
            $res['VersionFixed'] = $this->versionFixed;
        }
        if (null !== $this->fixCmd) {
            $res['FixCmd'] = $this->fixCmd;
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
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['AddedBy'])) {
            $model->addedBy = $map['AddedBy'];
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
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['VersionFormat'])) {
            $model->versionFormat = $map['VersionFormat'];
        }
        if (isset($map['CveLink'])) {
            $model->cveLink = $map['CveLink'];
        }
        if (isset($map['VersionFixed'])) {
            $model->versionFixed = $map['VersionFixed'];
        }
        if (isset($map['FixCmd'])) {
            $model->fixCmd = $map['FixCmd'];
        }

        return $model;
    }
}
