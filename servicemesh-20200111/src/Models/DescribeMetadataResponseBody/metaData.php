<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeMetadataResponseBody;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeMetadataResponseBody\metaData\proEdition;
use AlibabaCloud\Tea\Model;

class metaData extends Model
{
    /**
     * @description The current version.
     *
     * @example v1.14.3.87-g96cf7305-aliyun
     *
     * @var string
     */
    public $currentVersion;

    /**
     * @description The version information about ASM of a commercial edition.
     *
     * @var proEdition
     */
    public $proEdition;

    /**
     * @description The regions where ASM instances can be created.
     *
     * @var string[]
     */
    public $regions;

    /**
     * @description The custom resource definitions (CRDs) of all ASM versions.
     *
     * @var mixed[][]
     */
    public $versionCrds;

    /**
     * @description The Istio versions corresponding to the ASM versions.
     *
     * @var mixed[][]
     */
    public $versionRegistry;

    /**
     * @description The list of ASM versions.
     *
     * @var string[]
     */
    public $versions;
    protected $_name = [
        'currentVersion'  => 'CurrentVersion',
        'proEdition'      => 'ProEdition',
        'regions'         => 'Regions',
        'versionCrds'     => 'VersionCrds',
        'versionRegistry' => 'VersionRegistry',
        'versions'        => 'Versions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
        }
        if (null !== $this->proEdition) {
            $res['ProEdition'] = null !== $this->proEdition ? $this->proEdition->toMap() : null;
        }
        if (null !== $this->regions) {
            $res['Regions'] = $this->regions;
        }
        if (null !== $this->versionCrds) {
            $res['VersionCrds'] = $this->versionCrds;
        }
        if (null !== $this->versionRegistry) {
            $res['VersionRegistry'] = $this->versionRegistry;
        }
        if (null !== $this->versions) {
            $res['Versions'] = $this->versions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metaData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
        }
        if (isset($map['ProEdition'])) {
            $model->proEdition = proEdition::fromMap($map['ProEdition']);
        }
        if (isset($map['Regions'])) {
            if (!empty($map['Regions'])) {
                $model->regions = $map['Regions'];
            }
        }
        if (isset($map['VersionCrds'])) {
            if (!empty($map['VersionCrds'])) {
                $model->versionCrds = $map['VersionCrds'];
            }
        }
        if (isset($map['VersionRegistry'])) {
            if (!empty($map['VersionRegistry'])) {
                $model->versionRegistry = $map['VersionRegistry'];
            }
        }
        if (isset($map['Versions'])) {
            if (!empty($map['Versions'])) {
                $model->versions = $map['Versions'];
            }
        }

        return $model;
    }
}
