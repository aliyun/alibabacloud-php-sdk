<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListSoftwaresResponseBody\additionalPackages\additionalPackageInfos;

use AlibabaCloud\SDK\EHPC\V20240730\Models\ListSoftwaresResponseBody\additionalPackages\additionalPackageInfos\versions\versionInfos;
use AlibabaCloud\Tea\Model;

class versions extends Model
{
    /**
     * @var versionInfos[]
     */
    public $versionInfos;
    protected $_name = [
        'versionInfos' => 'VersionInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->versionInfos) {
            $res['VersionInfos'] = [];
            if (null !== $this->versionInfos && \is_array($this->versionInfos)) {
                $n = 0;
                foreach ($this->versionInfos as $item) {
                    $res['VersionInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VersionInfos'])) {
            if (!empty($map['VersionInfos'])) {
                $model->versionInfos = [];
                $n                   = 0;
                foreach ($map['VersionInfos'] as $item) {
                    $model->versionInfos[$n++] = null !== $item ? versionInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
