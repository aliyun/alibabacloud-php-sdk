<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListSoftwaresResponseBody;

use AlibabaCloud\SDK\EHPC\V20240730\Models\ListSoftwaresResponseBody\additionalPackages\additionalPackageInfos;
use AlibabaCloud\Tea\Model;

class additionalPackages extends Model
{
    /**
     * @var additionalPackageInfos[]
     */
    public $additionalPackageInfos;
    protected $_name = [
        'additionalPackageInfos' => 'AdditionalPackageInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalPackageInfos) {
            $res['AdditionalPackageInfos'] = [];
            if (null !== $this->additionalPackageInfos && \is_array($this->additionalPackageInfos)) {
                $n = 0;
                foreach ($this->additionalPackageInfos as $item) {
                    $res['AdditionalPackageInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return additionalPackages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionalPackageInfos'])) {
            if (!empty($map['AdditionalPackageInfos'])) {
                $model->additionalPackageInfos = [];
                $n                             = 0;
                foreach ($map['AdditionalPackageInfos'] as $item) {
                    $model->additionalPackageInfos[$n++] = null !== $item ? additionalPackageInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
