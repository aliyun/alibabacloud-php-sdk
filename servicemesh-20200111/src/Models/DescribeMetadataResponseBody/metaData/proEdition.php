<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeMetadataResponseBody\metaData;

use AlibabaCloud\Tea\Model;

class proEdition extends Model
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
     * @description The CRDs of the versions.
     *
     * @var mixed[][]
     */
    public $versionCrds;

    /**
     * @description The ASM version and the corresponding Istio version.
     *
     * @var mixed[][]
     */
    public $versionRegistry;

    /**
     * @description The supported versions.
     *
     * @var string[]
     */
    public $versions;
    protected $_name = [
        'currentVersion'  => 'CurrentVersion',
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
     * @return proEdition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
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
