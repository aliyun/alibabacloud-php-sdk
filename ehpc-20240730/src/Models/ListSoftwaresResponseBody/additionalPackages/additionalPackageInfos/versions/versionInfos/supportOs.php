<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListSoftwaresResponseBody\additionalPackages\additionalPackageInfos\versions\versionInfos;

use AlibabaCloud\SDK\EHPC\V20240730\Models\ListSoftwaresResponseBody\additionalPackages\additionalPackageInfos\versions\versionInfos\supportOs\supportOsInfos;
use AlibabaCloud\Tea\Model;

class supportOs extends Model
{
    /**
     * @var supportOsInfos[]
     */
    public $supportOsInfos;
    protected $_name = [
        'supportOsInfos' => 'SupportOsInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportOsInfos) {
            $res['SupportOsInfos'] = [];
            if (null !== $this->supportOsInfos && \is_array($this->supportOsInfos)) {
                $n = 0;
                foreach ($this->supportOsInfos as $item) {
                    $res['SupportOsInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportOs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportOsInfos'])) {
            if (!empty($map['SupportOsInfos'])) {
                $model->supportOsInfos = [];
                $n                     = 0;
                foreach ($map['SupportOsInfos'] as $item) {
                    $model->supportOsInfos[$n++] = null !== $item ? supportOsInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
