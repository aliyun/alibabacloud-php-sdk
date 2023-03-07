<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListCommunityImagesResponseBody\images\imageInfo;

use AlibabaCloud\Tea\Model;

class baseOsTag extends Model
{
    /**
     * @description The architecture of the operating system. Valid values:
     *
     *   i386
     *   x86\_64
     *
     * @example x86_64
     *
     * @var string
     */
    public $architecture;

    /**
     * @description The tag of the OS image.
     *
     * @example CentOS_7.2_64
     *
     * @var string
     */
    public $osTag;

    /**
     * @description The distribution of the operating system. Valid values:
     *
     *   CentOS
     *   Ubuntu
     *   SUSE
     *   OpenSUSE
     *   Debian
     *   CoreOS
     *   Aliyun
     *   Windows Server 2003
     *   Windows Server 2008
     *   Windows Server 2012
     *   Others Linux
     *   Customized Linux
     *
     * @example CentOS
     *
     * @var string
     */
    public $platform;

    /**
     * @description The version of the operating system.
     *
     * @example 7.2
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'architecture' => 'Architecture',
        'osTag'        => 'OsTag',
        'platform'     => 'Platform',
        'version'      => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baseOsTag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }
        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
