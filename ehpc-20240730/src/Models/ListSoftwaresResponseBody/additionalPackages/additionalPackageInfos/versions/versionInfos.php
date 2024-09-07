<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListSoftwaresResponseBody\additionalPackages\additionalPackageInfos\versions;

use AlibabaCloud\SDK\EHPC\V20240730\Models\ListSoftwaresResponseBody\additionalPackages\additionalPackageInfos\versions\versionInfos\supportOs;
use AlibabaCloud\Tea\Model;

class versionInfos extends Model
{
    /**
     * @description Indicates whether the version is the latest.
     *
     * @example false
     *
     * @var string
     */
    public $latest;

    /**
     * @description The information about the supported OSs.
     *
     * @var supportOs
     */
    public $supportOs;

    /**
     * @description The software version.
     *
     * @example 2024.1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'latest'    => 'Latest',
        'supportOs' => 'SupportOs',
        'version'   => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->latest) {
            $res['Latest'] = $this->latest;
        }
        if (null !== $this->supportOs) {
            $res['SupportOs'] = null !== $this->supportOs ? $this->supportOs->toMap() : null;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versionInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Latest'])) {
            $model->latest = $map['Latest'];
        }
        if (isset($map['SupportOs'])) {
            $model->supportOs = supportOs::fromMap($map['SupportOs']);
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
