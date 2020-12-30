<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribePkgVersionsResponseBody;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribePkgVersionsResponseBody\pkgVersions\pkgVersion;
use AlibabaCloud\Tea\Model;

class pkgVersions extends Model
{
    /**
     * @var pkgVersion[]
     */
    public $pkgVersion;
    protected $_name = [
        'pkgVersion' => 'PkgVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pkgVersion) {
            $res['PkgVersion'] = [];
            if (null !== $this->pkgVersion && \is_array($this->pkgVersion)) {
                $n = 0;
                foreach ($this->pkgVersion as $item) {
                    $res['PkgVersion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pkgVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PkgVersion'])) {
            if (!empty($map['PkgVersion'])) {
                $model->pkgVersion = [];
                $n                 = 0;
                foreach ($map['PkgVersion'] as $item) {
                    $model->pkgVersion[$n++] = null !== $item ? pkgVersion::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
